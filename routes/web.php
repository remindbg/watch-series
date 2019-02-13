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
Route::get('/series/{id}/{slug}/','SeriesController@single')->name('fseries.single');

Route::get('/series/{series_id}/{season_id}/{slug}/season/{season_num}/','SeasonController@single')->name('fseason.single');

Route::get('/series/{series_id}/{season_id}/{slug}/season/{season_num}/{episode_id}/episode/{episode_number}/'
    ,'EpisodeController@single')->name('fepisode.single');

Route::get('/test2', function () {
    return view('layouts.new');
});

Route::get('/theme/{theme}', 'ThemeController@pickTheme')->name('themepicker');

















/*
 * admin routes
 */
Route::get('/admin2', function () {
    return view('admin.homeadmin');
})->middleware('auth');
Route::resources([
    'admin2/series'     => 'admin\SeriesController',
    'admin2/episodes'   => 'admin\EpisodesController',
    'admin2/links'      => 'admin\LinksController',
    'admin2/comments'   => 'admin\CommentsController'
]);

/**
 * seasons admin routes todo: resource controllers
 */

Route::get('/admin2/series/{id}/seasons','admin\SeasonsController@index')->name('season.index');
Route::get('/admin2/series/{id}/create','admin\SeasonsController@create')->name('season.create');
Route::post('/admin2/series/{id}/seasons','admin\SeasonsController@store')->name('season.store');
Route::post('/admin2/season/{id}','admin\SeasonsController@update')->name('season.update');
Route::get('/admin2/seasons/{id}/edit','admin\SeasonsController@edit')->name('season.edit');
Route::post('/admin2/seasons/{id}/destroy','admin\SeasonsController@destroy')->name('season.destroy');

/*
 * episodes routes
 */
Route::get('/admin2/seasons/{id}/episodes','admin\EpisodesController@index')->name('episode.index');
Route::get('/admin2/episodes/{id}/create','admin\EpisodesController@create')->name('episode.create');
Route::post('/admin2/episodes/{id}/seasons','admin\EpisodesController@store')->name('episode.store');
Route::post('/admin2/episodes/{id}','admin\EpisodesController@update')->name('episode.update');
Route::get('/admin2/episodes/{id}/edit','admin\EpisodesController@edit')->name('episode.edit');
Route::post('/admin2/episodes/{id}/destroy','admin\EpisodesController@destroy')->name('episode.destroy');


/*
 * admin links routes
 */

Route::get('/admin2/episodes/{id}/links','admin\LinksController@index')->name('link.index');
Route::get('/admin2/links/{id}/create','admin\LinksController@create')->name('link.create');
Route::post('/admin2/links/{id}/episodes','admin\LinksController@store')->name('link.store');
Route::post('/admin2/links/{id}','admin\LinksController@update')->name('link.update');
Route::get('/admin2/links/{id}/edit','admin\LinksController@edit')->name('link.edit');
Route::post('/admin2/links/{id}/destroy','admin\LinksController@destroy')->name('link.destroy');