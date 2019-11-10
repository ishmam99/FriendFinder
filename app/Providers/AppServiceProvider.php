<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('alpha_spaces', function($attribute, $value)
    {
        return preg_match('/^[\pL\s]+$/u', $value);
    });

    }
}
