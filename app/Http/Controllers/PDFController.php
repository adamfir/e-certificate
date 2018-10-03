<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Response;

class PDFController extends Controller
{
    public function save(){
        $pathToImage = 'sertif.pdf';
        Browsershot::url('http://e-certificate.test/')->paperSize(1254/4, 887/4+1)->save($pathToImage);
        return Response::download($pathToImage,'sertifikat.pdf');
    }
}
