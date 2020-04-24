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

Route::get('/','MainPageController@index')->name('mainpage');
Route::get('/category/{name}', 'CategoryController@index')->name('category');
Route::get('/products','ProductsController@getProductTable')->name('products');
Route::get('/books','BooksController@GetAllBooks')->name('books');


Route::view('/login','pages.login');

