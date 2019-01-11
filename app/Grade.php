<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'kelas', 'jurusan',
    ];
   //protected $guarded = [];
    //public function grades(){
       // return $this->hasMany(Grade::class);
}
