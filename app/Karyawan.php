<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
     protected $table ='karyawan';
     protected $fillable =['nama','alamat','no_hp','jenis_kelamin','pengguna_id'];
     protected $guarded = ['id'];

     public function getUsernameAttribute(){
        return $this->pengguna->username;
     }
     public function pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

     public function admin(){
    	return $this->belongsTo(Admin::class);
    }

    public function lagu(){
    	return $this->hasMany(Lagu::class);
    }
}
