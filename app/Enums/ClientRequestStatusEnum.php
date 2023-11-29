<?php

namespace App\Enums;

use Shopper\Framework\Models\Shop\Order\OrderStatus;

enum ClientRequestStatusEnum : string
{
    case PENDING = 'pending';

    case PROCESSING = 'processing';

    case COMPLETED = 'completed';

    case CANCELLED = 'cancelled';

    public static function values(): array
    {
        return [
            self::PENDING->value => __('shopper::status.pending'),
            self::PROCESSING->value => __('shopper::status.processing'),
            self::COMPLETED->value => __('shopper::status.completed'),
            self::CANCELLED->value => __('shopper::status.cancelled'),
        ];
    }

    public static function status_classes(): array
    {
        return [
            self::PENDING->value => 'border-yellow-200 bg-yellow-100 text-yellow-800',
            self::PROCESSING->value => 'border-blue-200 bg-blue-100 text-blue-800',
            self::COMPLETED->value => 'border-green-200 bg-green-100 text-green-800',
            self::CANCELLED->value => 'border-red-200 bg-red-100 text-red-800',
//            self::CLOSED->value => 'border-purple-200 bg-purple-100 text-purple-800',
        ];
    }


}
