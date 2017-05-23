<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
     protected $table ='pesan';
     // protected $fillable =['room_id','member_id','jam_masuk','jam_keluar','total_bayar'];
     protected $guarded = ['id'];
     public function menu(){
    	return $this->belongsTo(Menu::class);
    }
    public function member(){
    	return $this->belongsTo(member::class);
    }
    public function room(){
    	return $this->belongsTo(room::class);
    }
}
