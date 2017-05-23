<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Jenis;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
  public function awal()
  {
    $semuaRoom = Room::all();
    return view('room.awal',compact('semuaRoom'));
  }
  public function tambah()
  {
    $room = new Room;
    $jenis = new Jenis;
    return view('room.tambah',compact('room','jenis'));
  }
  public function simpan(RoomRequest $input)
  {
      $room = new Room($input->only('jenis_id'));
      $room->nama_room= $input->nama_room;
      $room->harga = $input->harga;
      $informasi = $room->save() ? 'berhasil simpan data' : 'gagal simpan data' ; 
      return redirect('room')->with(['informasi'=>$informasi]);
  }
  public function edit ($id)
  {
  $jenis = new Jenis;
  $room= room::find($id);
  return view ('room.edit',compact('jenis'))->with(array('room'=>$room));
  }
  public function lihat ($id)
  {
  $room= Room::find($id);
  return view ('room.lihat')->with(array('room'=>$room));
  }
  public function update ($id, RoomRequest $input)
  {
    $room=Room::find($id);
    $room->fill($input->only('jenis_id')); 
    $room->nama_room = $input->nama_room;
    $room->harga = $input->harga;
    if($room->save()) $this->informasi = " Data room berhasil diperbaharui";
    return redirect('room')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $room= Room::find($id);
  $informasi = $room->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('room')->with(['informasi'=>$informasi]);
  }   
}
