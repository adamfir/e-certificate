<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'id', 'training_id', 'nama', 'nomor_urut'
    ];
}
