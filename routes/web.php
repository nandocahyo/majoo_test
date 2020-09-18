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

//home route
Route::get('/', 'HomeController@index')->name('home');
//detail route
Route::get('/detail/{id}', 'HomeController@product_detail')->name('product_detail');
//order route
Route::post('order/{id}', 'OrderProductController@order')->name('order');


//admin section
Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])->group(function() {
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::resource('product', 'ProductController');
    Route::resource('order', 'OrderController');
    //realtime notification
    Route::post('get-order','DashboardController@get_order')->name('get_order');
});
