<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){

            //$test = 'My Test';
            $pages = Page::all();
            
            
            //return $view->with('test', $test);
            return $view->with('pages', $pages);

        });
    }
}
