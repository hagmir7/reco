<?php

namespace App\Http\Livewire;

use App\Models\Shop\Product\Category;
use Livewire\Component;

class Products extends Component
{

    public $products = [];


    public function mount(){
        $this->products = Category::findOrFail(1)->products;
    }

    public function change($category_id){
        $this->products = Category::findOrFail($category_id);
    }

    public function render()
    {
        return view('livewire.products', [
            'categories' => Category::all(),
        ]);
    }
}
