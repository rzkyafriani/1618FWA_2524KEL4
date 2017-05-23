<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\lagu;
use App\home;
use App\room;
use App\menu;

class homeController extends Controller
{
  public function home()
  {
    
    return view('home');
  }
  
     public function daftar_lagu(){
    $semuaLagu = Lagu::all();
    return view('daftar_lagu',compact('semuaLagu')); 
  }
   public function daftar_room(){
    $sl = room::all();
    return view('room',compact('sl')); 
  }  
   public function daftar_menu(){
    $sm = menu::all();
    return view('menu',compact('sm')); 
  } 
}
