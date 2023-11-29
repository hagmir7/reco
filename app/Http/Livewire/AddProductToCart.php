<?php

namespace App\Http\Livewire;

use App\Models\Product;
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

        $this->emit('refresh-cart');
    }

    public function render()
    {
        return view('livewire.add-product-to-cart');
    }
}
