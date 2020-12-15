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
Route::get('/create', 'GameController@create')->name('game.create');
Route::post('/store', 'GameController@store')->name('game.store');
Route::get('/game/{id}', 'GameController@show')->name('game.show');
Route::get('/game/edit/{id}','GameController@edit')->name('game.edit');
Route::patch('/game/update/{id}','GameController@update')->name('game.up');
Route::delete('/game/delete/{id}','GameController@destroy')->name('game.del');