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

Route::get('/', 'BaseController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend', 'as' => 'backend.'], function ()
{
    Route::get('/', 'Backend\BaseController@index')->name('main');
    
    Route::get('/kategori', 'Backend\CategoryController@index')->name('kategori');
    Route::get('/barang', 'Backend\StuffController@index')->name('barang');
});
