<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
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
        Schema::defaultStringLength(191);

        Validator::extend('greater_than_field', function($attribute, $min, $max, $validator) {
            return $min < $max;
        },'يجب ان لايكون اقل كمية اكبر من اقصى كمية');

        Blade::if('admin', function () {
           if (Auth::check())
               if (Auth::user()->is_admin)
                   return true;

               return false;
        });
    }
}
