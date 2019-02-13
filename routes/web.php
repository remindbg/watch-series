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
Route::get('/latest','SeriesController@latest');
Route::get('/series/{id}/{slug}/','SeriesController@single');

/*
 * admin routes
 */

Route::resources([
    'admin2/series'     => 'admin\SeriesController',
    'admin2/episodes'   => 'admin\EpisodesController',
    'admin2/links'      => 'admin\LinksController',
    'admin2/comments'   => 'admin\CommentsController'
]);

Route::get('/admin2/series/{id}/seasons','admin\SeasonsController@index')->name('season.index');
Route::get('/admin2/series/{id}/create','admin\SeasonsController@create')->name('season.create');
Route::post('/admin2/series/{id}','admin\SeasonsController@store')->name('season.store');
Route::get('/admin2/seasons/{id}/edit','admin\SeasonsController@create')->name('season.edit');
Route::post('/admin2/series/{id}/destroy','admin\SeasonsController@destroy')->name('season.destroy');
Route::get('/admin2', function () {
    return view('admin.homeadmin');
});