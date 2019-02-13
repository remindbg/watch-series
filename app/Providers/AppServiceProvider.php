<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Series;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('static.defleftsidebar', function ($view) {
            $populars = Series::popular();
            $view->with('populars',$populars);
        });
        View::composer('static.rightsidebar', function ($view) {
            $latests = Series::latest();
            $view->with('latests',$latests);
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
