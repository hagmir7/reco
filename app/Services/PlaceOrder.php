<?php

namespace App\Services;

use App\Mail\NewOrder;
use Illuminate\Support\Facades\Mail;
use Shopper\Framework\Models\Shop\Discount;

//use Spatie\SlackAlerts\Facades\SlackAlert;

class PlaceOrder
{
    public static function store(array $data, ?Discount $discount)
    {
        $user = \App\Models\User::firstOrCreate([
            'email' => $data['email'],
        ], [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
        ]);

        $user->assignRole(config('shopper.system.users.default_role'));

        $address = $user->addresses()->firstOrCreate([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'street_address' => $data['address'] ?? '',
        ], [
            'city' => '_',
            'zipcode' => '',
            'is_default' => true,
            'type' => 'shipping',
            'country_id' => 140, //morocco
        ]);

        $order = \App\Models\Order::create([
            'number' => $user->id.' - '.time(),
            'status' => \Shopper\Framework\Models\Shop\Order\OrderStatus::PENDING,
            'currency' => shopper_currency(),
            'shipping_total' => '0',
            'shipping_method' => 'Flat Rate',
            'notes' => '',
            'parent_order_id' => null,
            'shipping_address_id' => $address->id,
            'payment_method_id' => null,
            'price_amount' => \Cart::getTotal(),
            'discount_id' => $discount?->id,
            'discount_amount' => is_null($discount) ? null : '',
            'user_id' => $user->id,
        ]);

        if (! is_null($discount)) {
            $discount->update([
                'total_use' => $discount->total_use + 1,
            ]);
        }

        foreach (\Cart::getContent() as $item) {
            \App\Models\OrderItem::create([
                'name' => $item['name'],
                //                'sku' => $item["sku"],
                'quantity' => $item['quantity'],
                'unit_price_amount' => $item['price'],
                'product_id' => $item['id'],
                'product_type' => 'product',
                'order_id' => $order->id,
            ]);
        }

        //        SlackAlert::message("Nouvelle Commande N°: {$order->number}, du client:  {$user->full_name}, produits: {$order->items->implode('name', ', ')}!");

        //        Mail::to(env("MAIL_CONTACT_ADDRESS") ?? 'contact@chertichaussures.com')->send(new NewOrder($order));

        return true;
    }
}
