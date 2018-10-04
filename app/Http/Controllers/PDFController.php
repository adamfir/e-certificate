<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Response;
use PDF;

class PDFController extends Controller
{
    /** Function commented below is using package "browsershot" from spatie. 
    *    Dependencies : Puppeteer from nodeJS. Hard to deploy on VPS and imposible to deploy in shared hosting.
    *                   This package should only use for testing, not production.
    *                   This package need chrome or chromium.
    */
    // public function save(){
    //     $pathToImage = 'sertif.pdf';
    //     Browsershot::url('http://e-certificate.test/')->paperSize(1254/4, 887/4+1)->save($pathToImage);
    //     return Response::download($pathToImage,'sertifikat.pdf');
    // }

    /** 
     *  Function below is using package DomPDF.
     *  Dependecies : not too much, only php extention dependecies.
     */

     public function save(){
        // $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::setOptions([
            'logOutputFile' => storage_path('logs/log.htm'),
            'tempDir' => storage_path('logs/')
        ])->loadView('welcome');
        // $pdf->loadView('welcome');
        return $pdf->setPaper([0,0,900,665])->download('sertif.pdf');
     }
}
