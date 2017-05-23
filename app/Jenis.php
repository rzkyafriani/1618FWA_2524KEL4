<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
     protected $table ='jenis';
     protected $fillable =['jenis_room','kapasitas'];

     public function room(){
    	return $this->hasMany(Room::class);
    }
}
