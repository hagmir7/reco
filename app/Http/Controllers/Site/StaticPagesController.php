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

        $homeCategories = $homeCategories->sortBy('priority')->values();

        if ($homeCategories_count < 4) {
            $restOfCategories = Category::enabled()
                ->whereNotIn('id', $homeCategories->pluck('id')->toArray())
                ->limit(4 - $homeCategories_count)
                ->get();

            $homeCategories = $homeCategories->merge($restOfCategories)->sortBy('priority')->values();
        }

        return view('welcome', [
            'featured_products' => \App\Models\Product::limit(6)->get(),
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
            'home_categories' => $homeCategories,
        ]);
    }

    public function about()
    {

        return view('site.about');
    }

    public function brands()
    {
        return view('site.brands', [
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
        ]);
    }

    public function services()
    {

        return view('site.services');
    }

    public function checkout()
    {

        return view('site.checkout');
    }

    public function eclairageOmbrage()
    {
        return view('site.eclairage-ombrage');
    }

    public function divertissement()
    {
        return view('site.divertissement');
    }

    public function securiteControle()
    {
        return view('site.securite-controle');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
