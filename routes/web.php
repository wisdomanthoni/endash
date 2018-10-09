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

Route::get('/', function () {
    return view('paper.home');
});

//Players Route
Route::resource('/players', 'PlayersController');

//Articles Route
Route::get('/articles', 'ArticlesController@index');

Route::prefix('matches')->group(function () {
    Route::resource('/seasons', 'SeasonController');
    Route::resource('/competitions', 'CompController');
    Route::resource('/clubs', 'ClubController');
});

Route::resource('/matches', 'MatchesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

