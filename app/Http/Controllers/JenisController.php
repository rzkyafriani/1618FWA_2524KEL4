<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jenis;
use App\Http\Requests\JenisRequest;

class JenisController extends Controller
{
  public function awal()
  {
    return view ('jenis.awal',['data'=>Jenis::all()]);
  }
  public function tambah()
  {
    return view('jenis.tambah');
  }
  public function simpan(JenisRequest $input)
  {
    $jenis = new Jenis();
    $jenis->jenis_room= $input->jenis_room;
    $jenis->kapasitas= $input->kapasitas;
    $informasi = $jenis->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('jenis')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
  $jenis = Jenis::find($id);
  return view ('jenis.edit')->with(array('jenis'=>$jenis));  
  }
  public function lihat($id)
  {
  $jenis = Jenis::find($id);
  return view ('jenis.lihat')->with(array('jenis'=>$jenis));
  }
  public function update($id, JenisRequest $input)
  {
  $jenis = Jenis::find($id);
  $jenis->jenis_room = $input->jenis_room;;
  $jenis->kapasitas= $input->kapasitas;
  $informasi = $jenis->save() ? 'Berhasil update data' : 'Gagal update data';
  return redirect('jenis')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
  $jenis = Jenis::find($id);
  $informasi = $jenis->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect ('jenis')->with(['informasi'=>$informasi]);  
  }
}