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

Route::get('/',"ProductsController@index");
Route::get('/product/create',"ProductsController@create");
Route::post('/product/store',"ProductsController@store")->name('storeproducts');
Route::get('/laravel', function () {
    return view('welcome');
})->name("guest");