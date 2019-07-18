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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sample', function (){
    return view('layouts/sample');
});

Route::get('/admin', function (){
    return view('layouts/admin');
});

Route::get('/dashboard', function (){
    return view('layouts/dashboard');
});
Route::group(['prefix'=>'home'], function(){
    Route::get('/product','productController@index')->name('product');
});
Route::get('/','HomeController@index')->name('home');
