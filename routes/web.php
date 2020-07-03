<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index');

Route::get('/album', 'AlbumController@index');
Route::post('/album/create',  'AlbumController@create');
Route::get('/album/{id}/edit', 'AlbumController@edit');
Route::post('/album/{id}/update', 'AlbumController@update');
Route::get('/album/{id}/delete', 'AlbumController@delete');

Route::get('/artist', 'ArtistController@index');
Route::post('/artist/create', 'ArtistController@create');
Route::get('/artist/{id}/edit', 'ArtistController@edit');
Route::post('/artist/{id}/update', 'ArtistController@update');
Route::get('/artist/{id}/delete', 'ArtistController@delete');

Route::get('/track', 'TrackController@index');
Route::post('/track/create','TrackController@create');
Route::get('/track/{id}/edit', 'TrackController@edit');
Route::post('/track/{id}/update', 'TrackController@update');
Route::get('/track/{id}/delete', 'TrackController@delete');

Route::get('/played', 'PlayedController@index');
Auth::routes();