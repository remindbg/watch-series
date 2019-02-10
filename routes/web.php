<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin2', function () {
    return view('admin.homeadmin');
});
/*
 * admin routes
 */

Route::resources([
    'admin2/series'     => 'admin\SeriesController',
    'admin2/seasons'    => 'admin\SeasonsController',
    'admin2/episodes'   => 'admin\EpisodesController',
    'admin2/links'      => 'admin\LinksController',
    'admin2/comments'   => 'admin\CommentsController'
]);
