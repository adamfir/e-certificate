<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
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
        return view('home', compact('categories'));
    }

    public function input(Request $request){
        // Membuat model training dan mengisi sesuai input user melalu form request
        $training = new Training;
        $training->judul = $request->judul;
        $training->kategori_id = $request->kategori_id;
        $training->lokasi = $request->lokasi;
        $training->tanggal_mulai = $request->tanggal_mulai;
        $training->tanggal_selesai = $request->tanggal_selesai;

        // Mengecek apakah user sudah menginputkan file excel
        if($request->hasFile('excel_data')){
            // Menyimpan file excel sementara untuk dibaca
            $path = $request->file('excel_data')->store('excel');
            $excel_data = Excel::toCollection(new PesertasImport, $path);
            Storage::delete($path);

            // Menyimpan model Training ke database
            $training->save();

            // Membaca sheet pertama pada file excel yang sudah terformat sesuai, kemudian menyimpannya ke database melalui model Penandatangan dan Tandatangan
            foreach ($excel_data[0] as $penandatangan){
                $penandatangan = new Penandatangan($penandatangan->toArray());
                $penandatangan->save();
                $tandatangan = new TandaTangan;
                $tandatangan->training_id = $training->id;
                $tandatangan->penandatangan_id = $penandatangan->id;
                $tandatangan->save();
            }
            // Membaca sheet kedua pada file excel yang sudah terformat sesuai, kemudian menyimpannya ke database melalui model peserta
            foreach ($excel_data[1] as $peserta){
                $peserta = new Peserta($peserta->toArray());
                $peserta->training_id = $training->id;
                $peserta->save();
            }

            // Memanggil fungsi untuk generate PDF
            return redirect()->action(
                'PDFController@generate', ['training_id' => $training->id]
            );
        }
    }

    public function list(){
        $trainings = Training::all();
        return view('list', compact('trainings'));
    }
}
