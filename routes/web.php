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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::fallback(function () {
    return redirect()->route('books');
});

Route::get('books', 'BookController@index')->name('books');
Route::get('books/create', 'BookController@create');
Route::get('books/{book}', 'BookController@show');
Route::get('books/{book}/edit', 'BookController@edit');
Route::post('books', 'BookController@store');
Route::put('books/{book}', 'BookController@update');
Route::delete('books/{book}', 'BookController@delete');