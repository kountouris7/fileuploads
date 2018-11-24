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


use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::post('put', 'UploadsController@uploads')->name('upload');
Route::get('show', 'UploadsController@show')->name('show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
