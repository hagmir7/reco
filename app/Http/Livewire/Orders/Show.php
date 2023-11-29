<?php

namespace App\Http\Livewire\Orders;

use App\Models\Product;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Shopper\Framework\Models\Shop\Inventory\Inventory;
use Shopper\Framework\Models\Shop\Order\Order;
use Shopper\Framework\Models\Shop\Order\OrderStatus;
use Shopper\Framework\Models\User\Address;

class Show extends Component
{
    use WithPagination;

    public Order $order;

    public int $perPage = 3;

    public ?string $notes = null;

    public function goToOrder(int $id): void
    {
        $this->redirectRoute('shopper.orders.show', $id);
    }

    public function cancelOrder(): void
    {
        $this->order->update(['status' => OrderStatus::CANCELLED]);

        Notification::make()
            ->title(__('Cancelled'))
            ->body(__('This order has been cancelled'))
            ->success()
            ->send();
    }

    public function leaveNotes(): void
    {
        $this->validate(['notes' => 'required']);

        $this->order->update(['notes' => $this->notes]);

        // TODO Send notification to the customer about order notes.

        Notification::make()
            ->title(__('Notes added'))
            ->body(__('Your note has been added and will be emailed to the user on their order.'))
            ->success()
            ->send();
    }

    public function register(): void
    {
        $this->order->update(['status' => OrderStatus::REGISTER]);

        // TODO Send notification to the customer about order registration.

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order has been marked as register and notification has been sent to the customer by email'))
            ->success()
            ->send();
    }

    public function markPaid(): void
    {
        $this->order->update(['status' => OrderStatus::PAID]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as paid'))
            ->success()
            ->send();
    }

    public function markComplete(): void
    {
        $this->order->update(['status' => OrderStatus::COMPLETED]);

        $inventory = Inventory::first();

        foreach ($this->order->items as $item)
        {
            if ($inventory){
                $actualProduct = Product::find($item->product_id);
                $actualProduct?->decreaseStock(
                    $inventory->id,
                    $item->quantity,
                    [
                        'old_quantity' => '-' . $item->quantity,
                        'event' => "commande Complete!",
                    ],
                );
            }
        }

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as complete'))
            ->success()
            ->send();
    }

    public function unregister(): void
    {
        $this->order->update(['status' => OrderStatus::PENDING]);

        // TODO Send notification to the customer about order registration.

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order has been marked as unregister and notification has been sent to the customer by email.'))
            ->success()
            ->send();
    }

    public function markUnpaid(): void
    {
        $this->order->update(['status' => OrderStatus::REGISTER]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as unpaid!'))
            ->success()
            ->send();
    }

    public function markUncomplete(): void
    {
        $this->order->update(['status' => OrderStatus::PAID]);

        $inventory = Inventory::first();

        foreach ($this->order->items as $item)
        {
            if ($inventory){
                $actualProduct = Product::find($item->product_id);
                $actualProduct?->increaseStock(
                    $inventory->id,
                    $item->quantity,
                    [
                        'old_quantity' => '+' . $item->quantity,
                        'event' => "commande marqué non complete!",
                    ],
                );
            }
        }

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as uncomplete.'))
            ->success()
            ->send();
    }

    public function render(): View
    {
        return view('livewire.orders.show', [
            'items' => $this->order
                ->items()
                ->with('product')
                ->simplePaginate($this->perPage),
            'nextOrder' => Order::query()
                    ->where('id', '>', $this->order->id)
                    ->oldest('id')
                    ->first() ?? null,
            'prevOrder' => Order::query()
                    ->where('id', '<', $this->order->id)
                    ->latest('id')
                    ->first() ?? null,
            'billingAddress' => Address::query()
                ->where('user_id', $this->order->customer->id)
                ->where('type', Address::TYPE_BILLING)
                ->where('is_default', true)
                ->first(),
        ]);
    }
}
