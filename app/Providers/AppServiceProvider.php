<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
                        $query->orWhere($field, 'like', '%'.$string.'%');
                    }
                });
            });
        });

        Str::macro('printHtml', function ($value) {
            return html_entity_decode(strip_tags($value));
        });

        Str::macro('printLimitedHtml', function ($value, $limit = 100, $end = '...') {
            if (mb_strwidth($value, 'UTF-8') <= $limit) {
                return $value;
            }

            return rtrim(mb_strimwidth(html_entity_decode(strip_tags($value)), 0, $limit, '', 'UTF-8')).$end;
        });

        Schema::defaultStringLength(191);

        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
