<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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

//        Route::bind('service', function ($value) {
//            return Service::where('title', $value)->firstOrFail();
//        });
//        Route::bind('service', function ($value) {
//            return Service::where('id', $value)->firstOrFail();
//        });
    }
}
