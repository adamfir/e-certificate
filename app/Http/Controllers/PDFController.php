<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Response;
use PDF;
use App\Training;
use App\Peserta;
use App\TandaTangan;
use App\Penandatangan;
use App\KategoriTraining;
use DateTime;

class PDFController extends Controller
{
    /** 
     * Function commented below is using package "browsershot" from spatie. 
     * Dependencies : Puppeteer from nodeJS. Hard to deploy on VPS and imposible to deploy in shared hosting.
     *                This package should only use for testing, not production.
     *                This package need chrome or chromium.
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
    /**
     * Package : DomPDF for laravel
     * Homepage : https://github.com/barryvdh/laravel-dompdf
     * Dependencies : PHP-GD & MBString extension
     * Detail : https://github.com/dompdf/dompdf/wiki/Requirements
     */
    public function save($training_id){
        $training = Training::where('id', '=', $training_id)->get()->first();
        // dd($training);
        $pesertas = Peserta::where('training_id','=',$training->id)->get();
        $tandatangans = TandaTangan::where('training_id','=',$training->id)->get();
        $penandatangans = collect();
        foreach($tandatangans as $tandatangan){
            $penandatangan = Penandatangan::where('id', '=', $tandatangan->penandatangan_id)->get()->first();
            $penandatangans->push($penandatangan);
        }
        $date = new DateTime();
        $date1 = new DateTime($training->tanggal_mulai);
        $date2 = new DateTime($training->tanggal_selesai);
        if($date1 == $date2){
            $date = $date1->format('F j, Y');
        }
        else if($date1->format('j') != $date2->format('j') && $date1->format('F,Y') == $date2->format('F,Y')){
            $str = $date1->format('F j-') . $date2->format('j, Y');
            $date = $str;
        }
        else if($date1->format('F j') != $date2->format('F j') && $date1->format('Y') == $date2->format('Y')){
            $date = $date1->format('F j - '). $date2->format('F j, Y');
        }
        else if($date1->format('Y') != $date2->format('Y')){
            $date = $date1->format('F j Y - ') . $date2->format('F j Y');
        }
        else{
            $date = date('F j, Y');
        }
        $kategori = KategoriTraining::where('id', '=', $training->kategori_id)->get()->first();
        // dd($kategori);
        // return view('certificate-layout', compact('training','pesertas','penandatangans'));
        $pdf = PDF::setOptions([
            'logOutputFile' => storage_path('logs/log.htm'),
            'tempDir' => storage_path('logs/')
        ])->loadView('certificate-layout', compact('training','pesertas','penandatangans', 'date', 'kategori'));
        return $pdf->setPaper([0,0,900,665])->download($training->judul . ' ' . $training->tanggal_mulai.'.pdf');
    }
}
