<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;

use App\Menu;
use App\Room;
use App\Jenis;
use App\Pesan;
use App\Lagu;
use App\Member;

class MmemberController extends Controller
{
    public function member(){
    	$member = Member::where('pengguna_id','=',Auth::user()->id)->get();
    	return view('master-member.awal_member',compact('member'));
    }
    public function menu(){
    	$member = Member::where('pengguna_id','=',Auth::user()->id)->get();
      return view ('master-member.awal_menu',['data'=>Menu::all()], compact('member'));
  }
  public function lagu(){ 
   $semuaLagu = Lagu::all();
   $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
   return view('master-member.awal_lagu',compact('member','semuaLagu'));
}
public function room(){
   $semuaRoom = Room::all();
   $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
   return view('master-member.awal_room',compact('member',	'semuaRoom'));
}
public function jenis(){
   $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
   return view ('master-member.awal_jenis',['data'=>Jenis::all()], compact('member'));
}
public function pesan(){
    $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
    $semuaPesan = Pesan::where('member_id','=',Auth::user()->member->id)->get();
    return view('master-member.awal_pesan',compact('semuaPesan','member'));
}
public function t_pesan($id){
    $room =  room::find($id);
    $menu = new menu;
    $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-member.tambah_pesan' ,compact('member','room','menu'));
}
public function s_pesan(Request $input){
    $pesan = new Pesan($input->only('member_id','room_id'));
    $room = new Room; 
    $pesan->jam_masuk = $input->jam_masuk;
    $pesan->jam_keluar = $input->jam_keluar;
    $lama = $input->jam_keluar - $input->jam_masuk;
    $tl = $lama * $input->harga;
    $pesan->lama = $lama;
    $pesan->total_bayar = $tl;
    if($pesan->save()) $this->informasi = 'Data pemesanan berhasil disimpan';
    return redirect('data_pesan_member')->with(['informasi'=>$this->informasi]);
}
// public function e_pesan($id)
// {
//     $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
//     $pesan = Pesan::find($id);
//     $room = room::where('id','=','room_id');
//     $menu = new Menu;
//     return view('master-member.edit_pesan',compact('member','room','menu','pesan'));
// }
// public function u_pesan ($id, Request $input)
// {
//     $pesan = Pesan::find($id);
//     $pesan->member_id = $input->member_id;
//     $pesan->room_id = $input->room_id;
//     $pesan->menu_id = $input->menu_id;
//     $pesan->jam_masuk = $input->jam_masuk;
//     $pesan->jam_keluar = $input->jam_keluar;
//     $lama = $input->jam_keluar - $input->jam_masuk;
//     $pesan->lama = $lama;
//     $informasi = $pesan->save()? 'Berhasil update data' : 'Gagal update data';
//     return redirect('data_pesan_member')->with(['informasi'=>$informasi]);
// }

public function hapus_pesan($id)
{
    $pesan= Pesan::find($id);
    $informasi = $pesan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('data_pesan_member')->with(['informasi'=>$informasi]);
}
public function lihat_room()
{
     $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
    $semuaRoom= room::all();
    return view('master-member.lihat_room',compact('semuaRoom','member'));
}   

public function edit_member($id){
    $member = Member::where('pengguna_id','=',Auth::user()->id)->get();
    $mbr = Member::find($id);
    return view('master-member.edit_member',compact('member','mbr'));
}
public function update_member ($id, Request $input)
{
    $member=Member::find($id);
    $pengguna = $member->pengguna;
    $member->nama = $input->nama;
    $member->alamat = $input->alamat;
    $member->no_hp = $input->no_hp;
    $member->jenis_kelamin = $input->jenis_kelamin;
    $member->save();
    if(!is_null($input->username)){
      $pengguna->fill($input->only('username'));
      if(!empty($input->password)){
        $pengguna->password = $input->password;
    }
    if($pengguna->save()){
        $this->informasi = 'Berhasil simpan data';
    }else{
        $this->informasi = 'Gagal simpan data';
    }
} 
return redirect('master-member')->with(['informasi'=>$this->informasi]);
}

}
