<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavCartManager extends Component
{

    public function removeItem($id)
    {
        \Cart::remove($id);

        $this->dispatchBrowserEvent("updated-cart", [
            'cartTotalQuantity' => \Cart::getTotalQuantity(),
            'items' => \Cart::getContent(),
            'cart_subtotal' => \Cart::getSubTotal(),
            'cart_total' => \Cart::getTotal(),
        ]);
    }
    public function render()
    {
        return view('livewire.nav-cart-manager');
    }
}
