<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Auth\SessionGuard;

use Auth;
use Validator;
use App\Pengguna;
use App\Menu;
use App\Room;
use App\Jenis;
use App\Pesan;
use App\Lagu;
use App\Member;
use App\Karyawan;

class MkaryawanController extends Controller
{
    public function karyawan(){
    	$karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    	return view('master-karyawan.awal_karyawan',compact('karyawan'));
    }
    
    public function edit_karyawan($id){
        $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
        $kry = karyawan::find($id);
        return view('master-karyawan.edit_karyawan',compact('karyawan','kry'));
    }
    public function update_karyawan ($id, Request $input)
	{
    	$karyawan=Karyawan::find($id);
    	$pengguna = $karyawan->pengguna;
    	$karyawan->nama = $input->nama;
    	$karyawan->alamat = $input->alamat;
    	$karyawan->no_hp = $input->no_hp;
    	$karyawan->jenis_kelamin = $input->jenis_kelamin;
    	$karyawan->save();
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
    	return redirect('master-karyawan')->with(['informasi'=>$this->informasi]);
  }
}
    public function member(){
    	$semuaMember = Member::all();
    	$karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    	return view('master-karyawan.awal_member',compact('karyawan','semuaMember'));
    }
  public function tambah_member()
  {
     $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.tambah_member',compact('karyawan'));
  }
  public function simpan_member(Request $input)
  {
    $pengguna = new Pengguna($input->only('username','password','level'));
    if($pengguna->save()){
      $member = new Member;
      $member->nama = $input->nama;
      $member->alamat = $input->alamat;
      $member->no_hp = $input->no_hp;
      $member->jenis_kelamin= $input->jenis_kelamin;
      if($pengguna->member()->save($member)) $this->informasi='Berhasil simpan data'; 
    }   
    return redirect('data_member')->with(['informasi'=>$this->informasi]);
  }
    public function hapus_member ($id)
  {
  $member= Member::find($id);
  $informasi = $member->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('data_member')->with(['informasi'=>$informasi]);
  }
    public function pesan(){
      $semuaPesan = Pesan::all();
      $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
      return view('master-karyawan.awal_pesan',compact('semuaPesan','karyawan'));
    }
  	public function jenis(){
        $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
        return view ('master-karyawan.awal_jenis',['data'=>Jenis::all()], compact('karyawan'));
    }
  public function lagu()
  {
    $semuaLagu = Lagu::all();
    $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.awal_lagu',compact('semuaLagu','karyawan'));
  }
  public function tambah_lagu()
  {
    $lagu = new Lagu;
    $karyawan = Karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.tambah_lagu',compact('lagu','karyawan'));
  }
  public function simpan_lagu(Request $input)
  {
    $lagu = new Lagu($input->only('karyawan_id')); 
    $lagu->judul = $input->judul;
    $lagu->penyanyi = $input->penyanyi;
    $lagu->link=$input->link;
    if($lagu->save()) $this->informasi= 'Data lagu berhasil disimpan';
    return redirect('data_lagu')->with(['informasi'=>$this->informasi]);
  }
  public function edit_lagu ($id)
  {
    $lagu= Lagu::find($id);
    $karyawan = new Karyawan;
    $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.edit_lagu',compact('lagu','karyawan'));
  }
  public function update_lagu ($id, Request $input)
  {
    $lagu = Lagu::find($id);
    $lagu->fill($input->only('karyawan_id'));
    $lagu->judul = $input->judul;
    $lagu->penyanyi = $input->penyanyi;
    $lagu->link=$input->link;
    if($lagu->save()) $this->informasi = "Data lagu berhasil diperbaharui";
    return redirect('data_lagu')->with(['informasi'=>$this->informasi]);
  }
  public function hapus_lagu ($id)
  {
  $lagu= Lagu::find($id);
  $informasi = $lagu->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('data_lagu')->with(['informasi'=>$informasi]);
  }   
  public function room()
  {
    $semuaRoom = Room::all();
    $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.awal_room',compact('semuaRoom','karyawan'));
  }
  
  public function menu()
  {
    $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view ('master-karyawan.awal_menu',['data'=>Menu::all()], compact('karyawan'));
  }
  public function tambah_menu()
  {
    $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('master-karyawan.tambah_menu',compact('karyawan'));
  }
  public function simpan_menu(Request $input)
  {
    $menu = new Menu();
    $menu->paket_makan_minum= $input->paket_makan_minum;
    $menu->keterangan= $input->keterangan;
    $menu->harga= $input->harga;
    $informasi = $menu->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('data_menu')->with(['informasi'=>$informasi]);
  }
  public function edit_menu($id)
  {
  $menu = Menu::find($id);
  $karyawan = karyawan::where('pengguna_id','=',Auth::user()->id)->get();
  return view ('master-karyawan.edit_menu',compact('karyawan'))->with(array('menu'=>$menu));  
  }
   public function update_menu($id, Request $input)
  {
  $menu = Menu::find($id);
  $menu->paket_makan_minum = $input->paket_makan_minum;
  $menu->keterangan= $input->keterangan;
  $menu->harga = $input->harga;
  $informasi = $menu->save() ? 'Berhasil update data' : 'Gagal update data';
  return redirect('data_menu')->with(['informasi'=>$informasi]);
  }

  public function hapus_menu($id)
  {
  $menu = Menu::find($id);
  $informasi = $menu->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect ('data_menu')->with(['informasi'=>$informasi]);  
  }
}   
