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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/list', 'HomeController@list')->name('list');
Route::post('/submit','HomeController@input')->name('submit');
Route::get('/generate/{training_id}', 'PDFController@generate')->name('generate');
Route::get('/download/{filename}', 'PDFController@download')->name('download');