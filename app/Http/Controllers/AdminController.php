<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Pengguna;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
  public function awal()
  {
    $semuaAdmin = Admin::all();
    return view('admin.awal',compact('semuaAdmin'));
  }
  public function tambah()
  {
    return view('admin.tambah');
  }
  public function simpan(AdminRequest $input)
  {
    $pengguna = new Pengguna($input->only('username','password','level'));
    if($pengguna->save()){
      $admin = new Admin;
      $admin->nama = $input->nama;
      $admin->alamat = $input->alamat;
      $admin->no_hp = $input->no_hp;
      $admin->jenis_kelamin= $input->jenis_kelamin;
      if($pengguna->admin()->save($admin)) $this->informasi='Berhasil simpan data'; 
    }   
    return redirect('admin')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
  $admin= Admin::find($id);
  return view ('admin.edit')->with(array('admin'=>$admin));
  }
  public function lihat ($id)
  {
  $admin= Admin::find($id);
  return view ('admin.lihat')->with(array('admin'=>$admin));
  }
  public function update ($id, AdminRequest $input)
  {
    $admin=Admin::find($id);
    $pengguna = $admin->pengguna;
    $admin->nama = $input->nama;
    $admin->alamat = $input->alamat;
    $admin->no_hp = $input->no_hp;
    $admin->jenis_kelamin = $input->jenis_kelamin;
    $admin->save();
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
    return redirect('admin')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $admin= Admin::find($id);
  $informasi = $admin->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('admin')->with(['informasi'=>$informasi]);
  }
    
}
