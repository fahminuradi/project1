<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'avatar', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'no_telp',
    ];
}
