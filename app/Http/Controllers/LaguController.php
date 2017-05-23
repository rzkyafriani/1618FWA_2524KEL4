<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lagu;
use App\Karyawan;
use App\Http\Requests\LaguRequest;

use Illuminate\Auth\SessionGuard;

use Auth;
use Validator;
class LaguController extends Controller
{
  public function awal()
  {
    $semuaLagu = Lagu::all();
    return view('lagu.awal',compact('semuaLagu'));
  }
  public function tambah()
  {
    $lagu = new Lagu;
    $karyawan = Karyawan::where('pengguna_id','=',Auth::user()->id)->get();
    return view('lagu.tambah',compact('lagu','karyawan'));
  }
  public function simpan(LaguRequest $input)
  {
    $lagu = new Lagu($input->only('karyawan_id')); 
    $lagu->judul = $input->judul;
    $lagu->penyanyi = $input->penyanyi;
    $lagu->link=$input->link;
    if($lagu->save()) $this->informasi= 'Data lagu berhasil disimpan';
    return redirect('lagu')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $lagu= Lagu::find($id);
    $karyawan = new Karyawan;
    return view('lagu.edit',compact('lagu','karyawan'));
  }
  public function lihat ($id)
  {
  $lagu= Lagu::find($id);
  return view ('lagu.lihat',compact('lagu'));
  }
  public function update ($id, LaguRequest $input)
  {
    $lagu = Lagu::find($id);
    $lagu->fill($input->only('karyawan_id'));
    if($lagu->save()) $this->informasi = "Data lagu berhasil diperbaharui";
    return redirect('lagu')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $lagu= Lagu::find($id);
  $informasi = $lagu->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('lagu')->with(['informasi'=>$informasi]);
  }  
  
 
}