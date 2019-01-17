<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
	protected $table = 'jadwals';
    protected $fillable = [
        'mapel1', 'mapel2', 'mapel3', 'mapel4', 'mapel5', 'guru1', 'guru2', 'guru3', 'guru4', 'guru5',
    ];
}
 