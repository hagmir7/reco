<?php

namespace App\Http\Livewire\Site;

use App\Models\Product;
use Livewire\Component;
use Shopper\Framework\Models\Shop\Product\Category;

class ProductsList extends Component
{
    public $search;

    public $category;

    protected $queryString = ['search', 'category'];

    public $categories = [];

    public function mount()
    {
        $this->categories = Category::enabled()->get();
    }

    public function render()
    {
        $category = $this->category;
        return view('livewire.site.products-list', [
            'products' => Product::multiSearch(['name', 'description'], $this->search)
                                ->when($category, static function ($query) use ($category) {
                                    return $query->whereHas('categories', static function ($query) use ($category) {
                                        $query->where('slug', $category);
                                    });
                                })
                                ->get(),
        ]);
    }
}
