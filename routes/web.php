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
Route::post('upload', 'UploadsController@upload')->name('upload');
Route::get('show', 'RetrieveCloudController@showFiles')->name('showFile');
Route::get('shareFile/{filename}', 'RetrieveCloudController@shareFile')->name('shareFile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
