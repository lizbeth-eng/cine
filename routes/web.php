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
Route::resource('movies','MovieController');
Route::get('viewTable','MovieController@viewTable');

Route::resources([
    'movies'    => 'MovieController',
    'entrances' => 'EntranceController',
    'rooms'     => 'RoomController',
    'funtions' => 'FuntionsController',
    'consumables' => 'ConsumableController'

]);

Route::resource('nombreRuta', 'nombreControlador');
Route::resource('movies', 'MovieController');
Route::resource('entrances', 'EntranceController');
Route::get('viewTable', 'MovieController@viewTable');
Auth::routes();
Route::resource('funtions','FuntionsController');
Route::resource('rooms','RoomController');
Route::resource('consumables','ConsumableController');

Route::get('/home', 'HomeController@index')->name('home');
