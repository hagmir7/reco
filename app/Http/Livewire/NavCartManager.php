<?php

namespace App\Http\Livewire;

class NavCartManager extends CartManager
{
    protected $listeners = ['refresh-cart' => '$refresh'];

    public function render()
    {
        return view('livewire.nav-cart-manager');
    }
}
