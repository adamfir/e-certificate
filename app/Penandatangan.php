<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penandatangan extends Model
{
    protected $fillable = [
        'id', 'nama', 'jabatan', 'instansi'
    ];
}
