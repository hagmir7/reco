<?php

namespace App\Http\Livewire\Site;

use App\Models\ClientRequest;
use Livewire\Component;

class ClientRequestForm extends Component
{
    public $first_name = '';

    public $last_name = '';

    public $email = '';

    public $phone = '';

    public $message = '';

    public bool $showSuccessMsg = false;

    public function rules(): array
    {
        return [
            'first_name' => 'required|min:3|max:100',
            'last_name' => 'required|min:3|max:100',
            'email' => 'required|email|max:150',
            'phone' => ['required', 'regex:/^(0|\+212)(5|6|7|8)[0-9]{8}$/'],
            'message' => 'required|min:100|max:10000',
        ];
    }

    public function save()
    {
        ClientRequest::create($this->validate());

        $this->reset();

        $this->showSuccessMsg = true;
    }

    public function render()
    {
        return view('livewire.site.client-request-form');
    }
}
