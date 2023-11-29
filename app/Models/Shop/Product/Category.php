<?php

namespace App\Models\Shop\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends \Shopper\Framework\Models\Shop\Product\Category
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'position',
        'is_enabled',
        'seo_title',
        'seo_description',
        'parent_id',
        'show_in_welcome_page',
        'priority',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'show_in_welcome_page' => 'boolean',
        'is_enabled' => 'boolean',
    ];
}
