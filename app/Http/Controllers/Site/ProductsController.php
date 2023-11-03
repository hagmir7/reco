<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();

        return view('site.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $product->loadCount('media');
        $featured_products = Product::whereNot('id', $product->id)->get();

        return view('site.products.show', compact('product', 'featured_products'));
    }
}
