<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
  public function awal()
  {
    return view ('menu.awal',['data'=>Menu::all()]);
  }
  public function tambah()
  {
    return view('menu.tambah');
  }
  public function simpan(MenuRequest $input)
  {
    $menu = new Menu();
    $menu->paket_makan_minum= $input->paket_makan_minum;
    $menu->keterangan= $input->keterangan;
    $menu->harga= $input->harga;
    $informasi = $menu->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('menu')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
  $menu = Menu::find($id);
  return view ('menu.edit')->with(array('menu'=>$menu));  
  }
  public function lihat($id)
  {
  $menu = Menu::find($id);
  return view ('menu.lihat')->with(array('menu'=>$menu));
  }
  public function update($id, MenuRequest $input)
  {
  $menu = Menu::find($id);
  $menu->paket_makan_minum = $input->paket_makan_minum;
  $menu->keterangan= $input->keterangan;
  $menu->harga = $input->harga;
  $informasi = $menu->save() ? 'Berhasil update data' : 'Gagal update data';
  return redirect('menu')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
  $menu = Menu::find($id);
  $informasi = $menu->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect ('menu')->with(['informasi'=>$informasi]);  
  }
}