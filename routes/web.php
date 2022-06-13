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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::get('/billReceipt', 'ReceiptController@index')->name('bill');
    Route::get('/getPrice/{id}', 'ReceiptController@getPrice');
});

// Route::get('/bill', 'ReceiptController@index')->name('Bill');


// Route::get('/billReciept','RecieptController@index');
// Route::get('/getPrice/{id}', 'RecieptController@getPrice');