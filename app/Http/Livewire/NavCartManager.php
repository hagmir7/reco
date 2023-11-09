<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavCartManager extends Component
{

    protected $listeners = ['refresh-cart' => '$refresh'];

    public function removeItem($id)
    {
        \Cart::remove($id);

        $this->emit('refresh-cart');
    }

    public function render()
    {
        return view('livewire.nav-cart-manager');
    }
}
