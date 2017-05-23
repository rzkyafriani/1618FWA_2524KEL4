<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     protected $table ='menu';
     protected $fillable =['makanan','minuman','harga'];
     protected $guarded = ['id'];
     public function pesan(){
    	return $this->hasMany(Pesan::class);
    }

     public function listMenudanKet(){
        $out = [];
        foreach ($this->all() as $mnk){
            $out[$mnk->id] = "{$mnk->paket_makan_minum} (Detail {$mnk->keterangan} Harga {$mnk->harga})";
        }
    return $out;
    }
}
