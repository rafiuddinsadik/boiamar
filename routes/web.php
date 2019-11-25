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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
    'namespace' => 'admin'
],
    function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //User Routes
    Route::get('users', 'UserController@index')->name('admin.users');
    Route::post('users/store', 'UserController@store')->name('admin.users.store');
    Route::get('users/destroy/{id}', 'UserController@destroy')->name('admin.users.destroy');

    //Category Routes
        Route::get('categories', 'CategoryController@index')->name('categories');
        Route::post('categories/store', 'CategoryController@store')->name('categories.store');
        Route::get('categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
//        Route::get('categories/update/{slug}', 'CategoryController@update')->name('categories.update');

});