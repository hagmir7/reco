<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Shop\Product\Category;
use Shopper\Framework\Repositories\Ecommerce\BrandRepository;

class StaticPagesController extends Controller
{
    public function home()
    {
        $homeCategories = Category::where('show_in_welcome_page', true)->get();
        $homeCategories_count = $homeCategories->count();
        if ($homeCategories_count < 4) {
            $restOfCategories = Category::enabled()
                ->whereNotIn('id', $homeCategories->pluck('id')->toArray())
                ->limit(4 - $homeCategories_count)
                ->get();

            $homeCategories = $homeCategories->merge($restOfCategories);
        }

        return view('welcome', [
            'featured_products' =>  \App\Models\Product::get(),
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
            'home_categories' => $homeCategories,
        ]);
    }

    public function about()
    {

        return view('site.about');
    }

    public function services()
    {

        return view('site.services');
    }

    public function checkout()
    {

        return view('site.checkout');
    }
}
