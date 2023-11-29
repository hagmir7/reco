<?php

namespace App\Http\Livewire\ClientRequests;

use App\Enums\ClientRequestStatusEnum;
use App\Models\ClientRequest;
use Livewire\Component;

class Browse extends Component
{
    public int $pending_requests_count = 0;

    public int $processing_requests_count = 0;

    public int $complete_requests_count = 0;

    public int $canceled_requests_count = 0;

    public function mount()
    {
        $this->pending_requests_count = ClientRequest::where('status', ClientRequestStatusEnum::PENDING->value)->count();
        $this->processing_requests_count = ClientRequest::where('status', ClientRequestStatusEnum::PROCESSING->value)->count();
        $this->complete_requests_count = ClientRequest::where('status', ClientRequestStatusEnum::COMPLETED->value)->count();
        $this->canceled_requests_count = ClientRequest::where('status', ClientRequestStatusEnum::CANCELLED->value)->count();
    }

    public function render()
    {
        return view('livewire.client-requests.browse', [
            'total' => ClientRequest::count(),
        ]);
    }
}
