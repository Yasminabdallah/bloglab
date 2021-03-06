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
Route::get(
    'posts',
    'PostsController@index'

)->name('posts.index')->middleware('auth');

Route::get('posts/create','PostsController@create')->middleware('auth');
Route::post('posts','PostsController@store')->middleware('auth');
Route::get('posts/{id}','PostsController@show')->name('posts.show')->middleware('auth');
Route::delete('posts/{id}','PostsController@destroy')->name('posts.destroy');
Route::get('posts/{id}/edit','PostsController@edit')->middleware('auth');
Route::put('posts/{post}','PostsController@update')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
