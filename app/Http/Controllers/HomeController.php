<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\KategoriTraining;
use App\Penandatangan;
use App\Peserta;
use App\TandaTangan;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PesertasImport;

class HomeController extends Controller
{
    public function home() {
        $categories = KategoriTraining::all();
        // dd($categories);
        return view('home', compact('categories'));
    }

    public function input(Request $request){
        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'lokasi' => 'required',
        //     'date_range' => 'required',
        //     'excel_data' => 'required|file'
        // ]);
        // dd($request);
        $training = new Training;
        $training->judul = $request->judul;
        $training->kategori_id = $request->kategori_id;
        $training->lokasi = $request->lokasi;
        $training->tanggal_mulai = $request->tanggal_mulai;
        $training->tanggal_selesai = $request->tanggal_selesai;
        if($request->hasFile('excel_data')){
            $excel_data = Excel::toCollection(new PesertasImport, request()->file('excel_data'));
        }
        $training->save();
        foreach ($excel_data[0] as $penandatangan){
            $penandatangan = new Penandatangan($penandatangan->toArray());
            $penandatangan->save();
            $tandatangan = new TandaTangan;
            $tandatangan->training_id = $training->id;
            $tandatangan->penandatangan_id = $penandatangan->id;
            $tandatangan->save();
            
        }
        foreach ($excel_data[1] as $peserta){
            $peserta = new Peserta($peserta->toArray());
            $peserta->training_id = $training->id;
            $peserta->save();
        }
        // dd($peserta, $penandatangan, $training);
        return redirect()->action(
            'PDFController@save', ['training_id' => $training->id]
        );
    }
}
