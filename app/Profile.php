<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   protected $fillable = [
      'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'no_telp',
   ];   
   //public function profile(){
    //return $this->belongsTo(Profile::class);
   // }
}
