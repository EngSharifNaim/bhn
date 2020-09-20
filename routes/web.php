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

Route::get('/', 'App\Http\Controllers\Front\HomeController@index');
Route::get('/news/{slug}/{blog}', 'App\Http\Controllers\Front\BlogController@show');
Route::get('/category_news/{name}/{id}', 'App\Http\Controllers\Front\CategoryController@show_news');
