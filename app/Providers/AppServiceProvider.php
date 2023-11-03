<?php

namespace App\Providers;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Builder::macro('multiSearch', function (array $fields, $string) {
            return $this->when($string, function ($query) use ($fields, $string) {
                $query->where(function ($query) use ($fields, $string) {
                    foreach ($fields as $field) {
                        $query->orWhere($field, 'like', '%' . $string . '%');
                    }
                });
            });
        });

        Schema::defaultStringLength(191);
    }
}
