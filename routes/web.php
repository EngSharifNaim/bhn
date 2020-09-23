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
Route::get('/geo', 'App\Http\Controllers\Front\HomeController@geo');
Route::get('/news/{slug}/{blog}', 'App\Http\Controllers\Front\BlogController@show');
Route::get('/category_news/{name}/{id}', 'App\Http\Controllers\Front\CategoryController@show_news');

Route::post('comment','App\Http\Controllers\Front\CommentController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard','middleware' => 'auth','namespace','App\Http\Controllers\Admin'],function (){
    Route::get('/','App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');
    Route::get('/blogs','App\Http\Controllers\Admin\BlogController@index')->name('blogs');
    Route::post('/blogs','App\Http\Controllers\Admin\BlogController@store')->name('addBlog');
});
