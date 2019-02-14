<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Series;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('static.rightsidebar', function ($view) {
            $latests = Series::all();
            $view->with('latests',$latests);
        });
        View::composer('layouts.new', function ($view) {
            $randoms = Series::inRandomOrder();
            $view->with('randoms',$randoms);
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