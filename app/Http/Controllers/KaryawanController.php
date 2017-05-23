<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Karyawan;
use App\Pengguna;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
{
  public function awal()
  {
    $semuaKaryawan = Karyawan::all();
    return view('karyawan.awal',compact('semuaKaryawan'));
  }
  public function tambah()
  {
    return view('karyawan.tambah');
  }
  public function simpan(KaryawanRequest $input)
  {
    $pengguna = new Pengguna($input->only('username','password','level'));
    if($pengguna->save()){
      $karyawan = new Karyawan;
      $karyawan->nama = $input->nama;
      $karyawan->alamat = $input->alamat;
      $karyawan->no_hp = $input->no_hp;
      $karyawan->jenis_kelamin= $input->jenis_kelamin;
      if($pengguna->karyawan()->save($karyawan)) $this->informasi='Berhasil simpan data'; 
    }   
    return redirect('karyawan')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
  $karyawan= Karyawan::find($id);
  return view ('karyawan.edit')->with(array('karyawan'=>$karyawan));
  }
  public function lihat ($id)
  {
  $karyawan= Karyawan::find($id);
  return view ('karyawan.lihat')->with(array('karyawan'=>$karyawan));
  }
  public function update ($id, KaryawanRequest $input)
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
    } 
    return redirect('karyawan')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $karyawan= Karyawan::find($id);
  $informasi = $karyawan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('karyawan')->with(['informasi'=>$informasi]);
  }
    
}
