<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shopper\Framework\Repositories\Ecommerce\BrandRepository;

class StaticPagesController extends Controller
{
    public function about()
    {

        return view('site.about', [
            'brands' => (new BrandRepository())->makeModel()->enabled()->get(),
        ]);
    }

    public function services()
    {

        return view('site.services');
    }
}
