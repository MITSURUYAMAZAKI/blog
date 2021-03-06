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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
// Route::get('/posts','PostController@index')->name('posts.index');
// //　->name('posts.index')　ルーティングに対する名前

// Route::get('/posts/create', 'PostController@create')->name('posts.create');

// // Route::get('/posts/edit', function () {
// //     return view('posts.edit');
// // });
// Route::get('/posts/{post}/show', 'PostController@edit')->name('posts.edit');
// Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
// Route::post('/posts', 'PostController@store')->name('posts.store');

// Route::put('/posts/{post}', 'PostController@update')->name('posts.update');

// Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
