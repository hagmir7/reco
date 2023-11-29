<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends \Shopper\Framework\Models\Shop\Order\OrderItem
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sku',
        'quantity',
        'unit_price_amount',
        'product_id',
        'product_type',
        'order_id',
    ];
}
