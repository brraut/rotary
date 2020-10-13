<?php

namespace App\Providers;

use App\Model\Event;
use App\Model\Setting;
use App\Model\Link;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

   
    public function register()
    {
         View::composer('*', function($view){

            $view->with('setting',  Setting::first());
            $view->with('links',  Link::all());
            $view->with('events',  Event::orderBy('created_at','desc')->limit(3)->get());

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

    }
}
