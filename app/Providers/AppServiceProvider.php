<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('components.button', 'btn');

        Blade::directive('bold', function ($text) {
            return "<b>" . $text . "</b>";
        });

        Blade::if('isint', function ($value = null) {
            return is_int($value);
        });

    }
}
