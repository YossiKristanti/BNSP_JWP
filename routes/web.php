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

// Menampilkan halaman sesuai dengan routing
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/addpost', 'HomeController@store')->name('addpost');
Route::get('/home/{id}', 'HomeController@editpost')->name('editpost');
Route::put('/home/edit/{id}', 'HomeController@update')->name('updatepost');
Route::get('/home/{id}/delete', 'HomeController@destroy')->name('deletepost');
