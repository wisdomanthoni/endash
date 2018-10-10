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
})->name('home');;

//Players Route
Route::resource('/players', 'PlayersController');

//Articles Route
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::post('/articles/store', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::delete('/articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');
Route::PATCH('/articles/{id}', 'ArticlesController@update')->name('articles.update');



Route::prefix('matches')->group(function () {
    Route::resource('/seasons', 'SeasonController');
    Route::resource('/competitions', 'CompController');
    Route::resource('/clubs', 'ClubController');
});

Route::resource('/matches', 'MatchesController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

