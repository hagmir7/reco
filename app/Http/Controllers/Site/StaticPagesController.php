<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Shopper\Framework\Repositories\Ecommerce\BrandRepository;

class StaticPagesController extends Controller
{
    public function home()
    {

        return view('welcome', [
            'featured_products' =>  \App\Models\Product::get(),
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
        ]);
    }

    public function about()
    {

        return view('site.about', [
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
            'featured_products' =>  \App\Models\Product::get(),
        ]);
    }

    public function services()
    {

        return view('site.services');
    }
}
