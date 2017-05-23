<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Pengguna extends Model implements AuthenticatableContract, CanResetPasswordContract
{
     use Authenticatable, CanResetPassword; 
     protected $table ='pengguna';
     protected $fillable =['username','password','level'];

      public function member()
    {
    	return $this->hasOne(Member::class);
    }
    public function admin(){
    	return $this->hasOne(Admin::class);
    }
     public function karyawan(){
    	return $this->hasOne(Karyawan::class);
    }

}
