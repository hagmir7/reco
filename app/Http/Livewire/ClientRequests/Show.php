<?php

namespace App\Http\Livewire\ClientRequests;

use App\Enums\ClientRequestStatusEnum;
use App\Models\ClientRequest;
use Filament\Notifications\Notification;
use Livewire\Component;

class Show extends Component
{

    public $clientRequest;

    public function mount(ClientRequest $clientRequest)
    {
        $this->clientRequest = $clientRequest;
    }

    public function markProcessing(): void
    {
        $this->clientRequest->update([
            'status' => ClientRequestStatusEnum::PROCESSING->value
        ]);

        // TODO Send notification to the customer about order registration.

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order has been marked as processing and notification has been sent to the customer by email'))
            ->success()
            ->send();
    }

    public function markComplete(): void
    {
        $this->clientRequest->update([
            'status' => ClientRequestStatusEnum::COMPLETED->value
        ]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as complete'))
            ->success()
            ->send();
    }

    public function markClosed(): void
    {
        $this->clientRequest->update([
            'status' => ClientRequestStatusEnum::CLOSED->value
        ]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as closed'))
            ->success()
            ->send();
    }

    public function markCancelled(): void
    {
        $this->clientRequest->update([
            'status' => ClientRequestStatusEnum::CANCELLED->value
        ]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as cancelled'))
            ->success()
            ->send();
    }

    public function markPending(): void
    {
        $this->clientRequest->update([
            'status' => ClientRequestStatusEnum::PENDING->value
        ]);

        Notification::make()
            ->title(__('Updated Status'))
            ->body(__('This order is marked as pending'))
            ->success()
            ->send();
    }

    public function render()
    {
        return view('livewire.client-requests.show');
    }
}
