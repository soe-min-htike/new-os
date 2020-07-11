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

Route::get('/', 'PostController@index')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>'auth'], function(){
    Route::get('product/add','ProductController@index')->name('product.add');
    
    Route::get('category/add','CategoryController@index')->name('category.add');
    Route::post('category/add','CategoryController@store')->name('category.store');
    Route::get('category/all','CategoryController@all')->name('category.all');
    Route::get('category/{id}/edit','CategoryController@edit');
    Route::post('category/{id}/edit','CategoryController@update');
    Route::get('category/{id}/delete','CategoryController@destroy');

});
