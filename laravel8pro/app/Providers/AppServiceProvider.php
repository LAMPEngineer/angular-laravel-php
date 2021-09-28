<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\MyString;

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
