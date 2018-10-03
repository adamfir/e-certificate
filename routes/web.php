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
Route::get('/download', 'PDFController@save');
// Route::get('/download', function() {
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadView('welcome');
//     return $pdf->setPaper([0,0,900,665])->download('sertif.pdf');
// });