<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends \Shopper\Framework\Models\Shop\Order\Order
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'status',
        'currency',
        'shipping_total',
        'shipping_method',
        'notes',
        'parent_order_id',
        'shipping_address_id',
        'payment_method_id',
        'price_amount',
        'user_id',
        'discount_id',
        'discount_amount',
    ];

    protected $casts = [
        'discount_amount' => 'float'
    ];

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }
}
