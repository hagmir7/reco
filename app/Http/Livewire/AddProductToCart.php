<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Jackiedo\Cart\Cart;
use Livewire\Component;

class AddProductToCart extends Component
{
    public Product $product;

    public $quantity = 1;

    public function mount(string $slug)
    {
        $this->product = Product::findBySlug($slug);
    }

    public function add()
    {
        \Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->price_amount,
            'quantity' => $this->quantity,
        ]);

        $this->dispatchBrowserEvent("updated-cart", [
            'cartTotalQuantity' => \Cart::getTotalQuantity(),
            'items' => \Cart::getContent(),
            'cart_subtotal' => \Cart::getSubTotal(),
            'cart_total' => \Cart::getTotal(),
        ]);
    }

    public function render()
    {
        return view('livewire.add-product-to-cart');
    }
}
