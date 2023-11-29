<?php

namespace App\Models;

use App\Enums\ClientRequestStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'phone',
        'message',
        'status',
    ];

    protected $appends = [
        'title',
        'status_classes',
        'formatted_status',
    ];

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->first_name.' '.$this->last_name,
        );
    }

    public function getFormattedStatusAttribute(): string
    {
        return ClientRequestStatusEnum::values()[$this->status];
    }

    public function getStatusClassesAttribute(): string
    {
        return ClientRequestStatusEnum::status_classes()[$this->status];
    }

    public function isPending(): bool
    {
        return $this->status === ClientRequestStatusEnum::PENDING->value;
    }

    public function isProcessing(): bool
    {
        return $this->status === ClientRequestStatusEnum::PROCESSING->value;
    }

    public function isComplete(): bool
    {
        return $this->status === ClientRequestStatusEnum::COMPLETED->value;
    }

    public function isCancelled(): bool
    {
        return $this->status === ClientRequestStatusEnum::CANCELLED->value;
    }
}
