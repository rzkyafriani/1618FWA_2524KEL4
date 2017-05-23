<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesan;
use App\Room;
use App\Menu;
use App\Member;
use App\Jenis;
use App\Http\Requests\PesanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class PesanController extends Controller
{
  public function awal()
  {
    $semuaPesan = Pesan::all();
    return view('pesan.awal',compact('semuaPesan'));
  }
  public function tambah()
  {
    $member = Member::where('pengguna_id','=',Auth::user()->id);
    $room = new Room; 
    $menu = new Menu; 
    return view('pesan.tambah',compact('member','room','menu'));
  }
  public function simpan(Request $input)
  {
    $pesan = new Pesan($input->only('member_id','room_id','menu_id'));
    $hr = room::where('harga','=',$input->only('room_id')); 
    $hm = DB::table('room')->where('harga',$input->room_id);
    $pesan->jam_masuk = $input->jam_masuk;
    $pesan->jam_keluar = $input->jam_keluar;
    $lama = $input->jam_keluar - $input->jam_masuk;
    $tl = (int)$hr * (int)$lama;
    $all = $tl + $hm;
    $pesan->lama = $lama;
    $pesan->total_bayar = $all;
    if($pesan->save()) $this->informasi= 'Data pemesanan berhasil disimpan';
    return redirect('pesan')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $pesan = Pesan::find($id);
    $member = new Member;
    $room = new Room;
    $menu = new Menu;
    return view('pesan.edit',compact('member_id','room_id','menu_id'));
  }
  public function lihat ($id)
  {
  $pesan = Pesan::find($id);
  return view ('pesan.lihat', compact('pesan'));
  }
  public function update ($id, Request $input)
  {
    $pesan = Pesan::find($id);
    $pesan->member_id = $input->member_id;
    $pesan->room_id = $input->room_id;
    $pesan->menu_id = $input->menu_id;
    $informasi = $pesan->save()? 'Berhasil update data' : 'Gagal update data';
    return redirect('pesan')->with(['informasi'=>$informasi]);
  }
  public function hapus ($id)
  {
  $pesan= Pesan::find($id);
  $informasi = $pesan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('pesan')->with(['informasi'=>$informasi]);
  }   
}