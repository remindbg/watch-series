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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}