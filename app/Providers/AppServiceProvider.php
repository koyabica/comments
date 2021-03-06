<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \DB::listen( function($query) { 
            \Log::info($query->sql, $query->bindings); 
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
