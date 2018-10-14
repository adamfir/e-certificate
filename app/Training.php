<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'id', 'kategori_kode', 'judul', 'lokasi', 'tanggal_mulai', 'tanggal_selesai', 'filename'
    ];
}
