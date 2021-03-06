<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

use Illuminate\Auth\SessionGuard;

use Auth;
use Validator;

class SesiController extends Controller
{

public function index()
	{
		return view('home');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$pengguna = Pengguna::where($input->only('username','password'))->first();
		if(!is_null($pengguna)){
				Auth::login($pengguna);
				if(Auth::check())
					if(Auth::user()->level == 'admin'){
						return redirect('/master')->with('informasi',"Selamat Datang ".Auth::user()->username);
					}
					else if (Auth::user()->level == 'karyawan'){
						return redirect('/master-karyawan')->with('informasi',"Selamat Datang ".Auth::user()->username);
					}
					else if (Auth::user()->level == 'member'){
						return redirect('/master-member')->with('informasi',"Selamat Datang ".Auth::user()->username);
					}
				}
					return redirect('/login')->withErrors(['Pengguna tidak ditemukan']);
		}
		public function logout()
		{
			if(Auth::check()){
					Auth::logout();
					return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
			}else{
					return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
			}
	}	
}

