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
Route::get('/', 'GameController@index')->name('index');
Route::get('/genre', 'GenreController@index')->name('genre.id');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/game/{id}', 'GameController@show')->name('game.show');

    Route::get('/genre/{id}', 'GenreController@show')->name('genre.view');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
    //Games
    Route::get('/create', 'GameController@create')->name('game.create');
    Route::post('/store', 'GameController@store')->name('game.store');
    Route::get('/game/edit/{id}','GameController@edit')->name('game.edit');
    Route::patch('/game/update/{id}','GameController@update')->name('game.up');
    Route::delete('/game/delete/{id}','GameController@destroy')->name('game.del');
    //Genre
    Route::get('/add', 'GenreController@add')->name('genre.add');
    Route::post('/genre/store', 'GenreController@store')->name('genre.store');
    Route::delete('/genre/delete/{id}','GenreController@destroy')->name('genre.del');
    Route::get('/genre/edit/{id}','GenreController@edit')->name('genre.edit');
    Route::patch('/genre/update/{id}','GenreController@update')->name('genre.up');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
