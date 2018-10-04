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

//Matches Route
Route::get('/matches', 'MatchesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
