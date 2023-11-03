<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jackiedo\Cart\Contracts\UseCartable;
use Jackiedo\Cart\Traits\CanUseCart;
use Shopper\Framework\Models\Shop\Product\Category;

class Product extends \Shopper\Framework\Models\Shop\Product\Product implements UseCartable
{
    use HasFactory, CanUseCart;

    protected $cartTitleField = 'name';

    public function scopeCategorySlug(Builder $query, Category $category): Builder
    {
        return $query->leftJoin('product_has_relations', '')
            ->leftJoin('categories', 'categories.id', '=', '')->where();
    }
}
