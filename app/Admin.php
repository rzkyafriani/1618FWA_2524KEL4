<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $table ='admin';
     protected $fillable =['nama','alamat','no_hp','jenis_kelamin','pengguna_id'];

     public function pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

     public function karyawan(){
    	return $this->hasMany(Karyawan::class);
    }
}
