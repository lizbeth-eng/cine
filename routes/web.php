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
//Route::resource('movies','MovieController');
Route::get('/movies.viewTable','MovieController@viewTable');
Route::get('/funtions.viewTable','FuntionsController@viewTable');
Route::get('/entrances.viewTable','EntranceController@viewTable');
Route::get('/rooms.viewTable','RoomController@viewTable');

Route::get('entrances-pdf','EntranceController@exportToPDF')->name('entrances.pdf');
Route::get('consumables-pdf','ConsumableController@exportToPDF')->name('consumables.pdf');
Route::get('movies-pdf','MovieController@exportToPDF')->name('movies.pdf');
Route::get('funtions-pdf','FuntionsController@exportToPDF')->name('funtions.pdf');
Route::get('rooms-pdf','RoomController@exportToPDF')->name('rooms.pdf');

Route::get('/moviesXLS','MovieController@exportToXls');
Route::get('/moviesCSV','MovieController@exportToCsv');

Route::get('/roomsXLS','RoomController@exportToXls');
Route::get('/roomCSV','RoomController@exportToCsv');

Route::get('/consumablesXLS','ConsumableController@exportToXls');
Route::get('/consumablesCSV','ConsumableController@exportToCsv');

Route::get('/funtionsXLS','FuntionsController@exportToXls');
Route::get('/funtionsCSV','FuntionsController@exportToCsv');

Route::get('/entrancesXLS','EntranceController@exportToXls');
Route::get('/entrancesCSV','EntranceController@exportToCsv');

Route::get('graficas.graficasPeliculas','GraficasController@graficarPeliculas')->name('movies.grafica');





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
