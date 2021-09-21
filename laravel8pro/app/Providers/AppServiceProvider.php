<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\MyString;
use App\Billing\Stripe;

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
        $this->app->bind('mylibrary', function($app){
            return new MyString;
        });

        $this->app->singleton(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
