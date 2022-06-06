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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/showbarang', 'BarangController@showBarang');
Route::get('/addbarang', 'BarangController@addBarang');
Route::get('/edit/{id}', 'editController@edit');
Route::post('/store', 'BarangController@store');

Route::put('/update/{id}', 'editController@update');
Route::get('/delete/{id}', 'editController@delete')->name('deletebarang');