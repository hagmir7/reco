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
        $this->product->addToCart('panier', [
            'quantity' => $this->quantity,
            'price' => $this->product->price->amount,
        ]);
    }

    public function render()
    {
        return view('livewire.add-product-to-cart');
    }
}
