<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Member;
use App\Pengguna;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
  public function awal()
  {
    $semuaMember = Member::all();
    return view('member.awal',compact('semuaMember'));
  }
  public function tambah()
  {
    return view('member.tambah');
  }
  public function simpan(MemberRequest $input)
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
    return redirect('member')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
  $member= Member::find($id);
  return view ('member.edit')->with(array('member'=>$member));
  }
  public function lihat ($id)
  {
  $member= member::find($id);
  return view ('member.lihat')->with(array('member'=>$member));
  }
  public function update ($id, MemberRequest $input)
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
    return redirect('member')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $member= Member::find($id);
  $informasi = $member->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect('member')->with(['informasi'=>$informasi]);
  }
    
}
