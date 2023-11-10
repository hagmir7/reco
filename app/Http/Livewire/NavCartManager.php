<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class NavCartManager extends CartManager
{
    protected $listeners = ['refresh-cart' => '$refresh'];

    public function render()
    {
        return view('livewire.nav-cart-manager');
    }
}
