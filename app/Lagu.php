<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
     protected $table ='lagu';
     protected $fillable =['judul','penyanyi','link','karyawan_id'];
     protected $guarded = ['id'];
     public function karyawan(){
    	return $this->belongsTo(Karyawan::class);
    }
}
