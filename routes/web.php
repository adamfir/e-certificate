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

Route::get('/', 'HomeController@home');
Route::get('/layout', function(){
    $ttd = 3;
    return view('try', compact('ttd'));
});
Route::post('/submit','HomeController@input')->name('submit');
Route::get('/download/{training_id}', 'PDFController@save')->name('download');
// Route::get('/download', function() {
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadView('welcome');
//     return $pdf->setPaper([0,0,900,665])->download('sertif.pdf');
// });