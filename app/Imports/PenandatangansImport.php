<?php

namespace App\Imports;

use App\Penandatangan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PenandatangansImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penandatangan([
            'nama'=> $row['Nama'],
            'jabatan'=> $row['Jabatan'],
            'perusahaan'=> $row['Instansi']

        ]);
    }
}
