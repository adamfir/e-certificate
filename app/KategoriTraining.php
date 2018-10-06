<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriTraining extends Model
{
    protected $fillable = [
        'id', 'kode', 'nama',
    ];
}
