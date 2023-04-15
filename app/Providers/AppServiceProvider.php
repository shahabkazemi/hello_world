<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as BaseValidator;

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
        Schema::defaultStringLength(191);
        //
        Blade::component('components.button', 'btn');

        Blade::directive('bold', function ($text) {
            return "<b>" . $text . "</b>";
        });

        Blade::if('isint', function ($value = null) {
            return is_int($value);
        });

        Validator::extend("my_validator", function($field, $values, $params, BaseValidator $failed ){
            return is_array($values) && count($values) > 2;
        });
    }
}
