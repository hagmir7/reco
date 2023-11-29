<?php

namespace App\Http\Livewire\Modals;

use App\Models\ClientRequest;
use LivewireUI\Modal\ModalComponent;

class DeleteClientRequest extends ModalComponent
{
    public int $clientRequestId;

    public function mount(int $clientRequestId): void
    {
        $this->clientRequestId = $clientRequestId;
    }

    public function delete(): void
    {
        ClientRequest::query()->find($this->clientRequestId)->delete();

        session()->flash('success', __('shopper::pages/client-requests.modal.success_message'));

        $this->redirectRoute('shopper.client_requests.index');
    }

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function render()
    {
        return view('livewire.modals.delete-client-request');
    }
}
