<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $table ='room';
     protected $fillable =['jenis_id','menu_id'];
     protected $guarded = ['id'];
     public function jenis(){
    	return $this->belongsTo(Jenis::class);
    }

     public function pesan(){
    	return $this->hasMany(pesan::class);
    }
    public function listRoomdanJenis(){
        $out = [];
        foreach ($this->all() as $rmj){
            $out[$rmj->id] = "{$rmj->nama_room} (Ukuran {$rmj->jenis->jenis_room} Harga {$rmj->harga})";
        }
    return $out;
    }
}
