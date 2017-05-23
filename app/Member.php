<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $table ='member';
     protected $fillable =['nama','alamat','no_hp','jenis_kelamin','pengguna_id'];

     public function getUsernameAttribute(){
     	return $this->pengguna->username;
     }

     public function pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

     public function pesan(){
    	return $this->hasMany(pesan::class);
    }
}
