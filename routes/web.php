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
        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

        //User Routes
        Route::get('users', 'UserController@index')->name('admin.users');
        Route::post('users/store', 'UserController@store')->name('admin.users.store');
        Route::get('users/destroy/{id}', 'UserController@destroy')->name('admin.users.destroy');

        //Author Routes
        Route::get('authors', 'AuthorController@index')->name('admin.authors');
        Route::post('authors/store', 'AuthorController@store')->name('admin.authors.store');
        Route::get('authors/destroy/{id}', 'AuthorController@destroy')->name('admin.authors.destroy');

        //Book Routes
        Route::get('books', 'BookController@index')->name('admin.books');
        Route::post('books/store', 'BookController@store')->name('admin.books.store');
        Route::get('books/destroy/{id}', 'BookController@destroy')->name('admin.books.destroy');

        //Category Routes
        Route::get('categories', 'CategoryController@index')->name('categories');
        Route::post('categories/store', 'CategoryController@store')->name('categories.store');
        Route::get('categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
//        Route::get('categories/update/{slug}', 'CategoryController@update')->name('categories.update');

        //Post Routes
        Route::get('posts', 'PostController@index')->name('admin.posts');
        Route::get('posts/create', 'PostController@create')->name('admin.posts.create');
        Route::post('posts/store', 'PostController@store')->name('admin.posts.store');

    });