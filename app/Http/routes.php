<?php
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'admin'], function(){
Route::get('master',function(){
	return view('master');
});
Route::get('jenis','JenisController@awal');
Route::get('jenis/tambah','JenisController@tambah');
Route::post('jenis/simpan','JenisController@simpan');
Route::get('jenis/edit/{jenis}','JenisController@edit');
Route::post('jenis/edit/{jenis}','JenisController@update');
Route::get('jenis/lihat/{jenis}','JenisController@lihat');
Route::get('jenis/hapus/{jenis}','JenisController@hapus');

Route::get('menu','MenuController@awal');
Route::get('menu/tambah','MenuController@tambah');
Route::post('menu/simpan','MenuController@simpan');
Route::get('menu/edit/{menu}','MenuController@edit');
Route::post('menu/edit/{menu}','MenuController@update');
Route::get('menu/lihat/{menu}','MenuController@lihat');
Route::get('menu/hapus/{menu}','MenuController@hapus');

Route::get('member','MemberController@awal');
Route::get('member/tambah','MemberController@tambah');
Route::post('member/simpan','MemberController@simpan');
Route::get('member/edit/{member}','MemberController@edit');
Route::post('member/edit/{member}','MemberController@update');
Route::get('member/lihat/{member}','MemberController@lihat');
Route::get('member/hapus/{member}','MemberController@hapus');

Route::get('admin','AdminController@awal');
Route::get('admin/tambah','AdminController@tambah');
Route::post('admin/simpan','AdminController@simpan');
Route::get('admin/edit/{admin}','AdminController@edit');
Route::post('admin/edit/{admin}','AdminController@update');
Route::get('admin/lihat/{admin}','AdminController@lihat');
Route::get('admin/hapus/{admin}','AdminController@hapus');

Route::get('karyawan','KaryawanController@awal');
Route::get('karyawan/tambah','KaryawanController@tambah');
Route::post('karyawan/simpan','KaryawanController@simpan');
Route::get('karyawan/edit/{karyawan}','KaryawanController@edit');
Route::post('karyawan/edit/{karyawan}','KaryawanController@update');
Route::get('karyawan/lihat/{karyawan}','KaryawanController@lihat');
Route::get('karyawan/hapus/{karyawan}','KaryawanController@hapus');

Route::get('lagu','LaguController@awal');
Route::get('lagu/tambah','LaguController@tambah');
Route::post('lagu/simpan','LaguController@simpan');
Route::get('lagu/edit/{lagu}','LaguController@edit');
Route::post('lagu/edit/{lagu}','LaguController@update');
Route::get('lagu/lihat/{lagu}','LaguController@lihat');
Route::get('lagu/hapus/{lagu}','LaguController@hapus');

Route::get('room','RoomController@awal');
Route::get('room/tambah','RoomController@tambah');
Route::post('room/simpan','RoomController@simpan');
Route::get('room/edit/{room}','RoomController@edit');
Route::post('room/edit/{room}','RoomController@update');
Route::get('room/lihat/{room}','RoomController@lihat');
Route::get('room/hapus/{room}','RoomController@hapus');

Route::get('pesan','PesanController@awal');
Route::get('pesan/tambah','PesanController@tambah');
Route::post('pesan/simpan','PesanController@simpan');
Route::get('pesan/edit/{pesan}','PesanController@edit');
Route::post('pesan/edit/{pesan}','PesanController@update');
Route::get('pesan/lihat/{pesan}','PesanController@lihat');
Route::get('pesan/hapus/{pesan}','PesanController@hapus');
});


Route::group(['middleware'=>'member'], function()
{
	Route::get('/master-member','MmemberController@member');
Route::get('menu_member','MmemberController@menu');
Route::get('lagu_member','MmemberController@lagu');
Route::get('room_member','MmemberController@lihat_room');
Route::get('jenis_member','MmemberController@jenis');
Route::get('member_pesan/tambah/{room}','MmemberController@t_pesan');
Route::post('member_pesan/simpan','MmemberController@s_pesan');
Route::get('pesan_room','MmemberController@room');
Route::get('e_pesan/edit/{pesan}','MmemberController@e_pesan');
Route::post('e_pesan/edit/{pesan}','MmemberController@u_pesan');
Route::get('data_pesan_member','MmemberController@pesan');
Route::get('edit_member/edit/{mbr}','MmemberController@edit_member');
Route::post('edit_member/edit/{mbr}','MmemberController@update_member');
Route::get('h_pesan/{pesan}','MmemberController@hapus_pesan');
Route::get('ujiHas','RelationshipRebornController@ujiHas');
	
});

Route::group(['middleware'=>'admin'], function()
{
	Route::get('room','RoomController@awal');
	Route::get('menu','MenuController@awal');
	Route::get('pesan','PesanController@awal');
	Route::get('lagu','LaguController@awal');
	Route::get('member','MemberController@awal');
	Route::get('admin','AdminController@awal');
	Route::get('jenis','JenisController@awal');
	Route::get('karyawan','KaryawanController@awal');
	
});

Route::group(['middleware'=>'karyawan'], function()
{
	Route::get('room','RoomController@awal');
	Route::get('menu','MenuController@awal');
	Route::get('pesan','PesanController@awal');
	Route::get('lagu','LaguController@awal');
	Route::get('member','MemberController@awal');
	Route::get('karyawan','KaryawanController@awal');
	Route::get('jenis','JenisController@awal');
	Route::get('/master-karyawan','MkaryawanController@karyawan');
Route::get('edit_karyawan/edit/{kry}','MkaryawanController@edit_karyawan');
Route::post('edit_karyawan/edit/{kry}','MkaryawanController@update_karyawan');
Route::get('member_karyawan','MkaryawanController@member');
Route::get('member_karyawan/tambah','MkaryawanController@tambah_member');
Route::post('member_karyawan/simpan','MkaryawanController@simpan_member');
Route::get('data_member','MkaryawanController@member');
Route::get('hapus_member/hapus/{member}','MkaryawanController@hapus_member');
Route::get('pesan_karyawan','MkaryawanController@pesan');
Route::get('jenis_karyawan','MkaryawanController@jenis');
//Route::get('jenis_karyawan/tambah','MkaryawanController@t_jenis');
//Route::post('jenis_karyawan/simpan','MkaryawanController@s_jenis');
//Route::get('data_jenis','MkaryawanController@jenis');
//Route::get('e_jenis/edit/{jenis}','MkaryawanController@e_jenis');
//Route::post('e_jenis/edit/{jenis}','MkaryawanController@u_jenis');
//Route::get('h_jenis/{jenis}','MkaryawanController@h_jenis');
Route::get('lagu_karyawan','MkaryawanController@lagu');
Route::get('lagu_karyawan/tambah','MkaryawanController@tambah_lagu');
Route::post('lagu_karyawan/simpan','MkaryawanController@simpan_lagu');
Route::get('data_lagu','MkaryawanController@lagu');
Route::get('edit_lagu/edit/{lagu}','MkaryawanController@edit_lagu');
Route::post('edit_lagu/edit/{lagu}','MkaryawanController@update_lagu');
Route::get('hapus_lagu/hapus/{lagu}','MkaryawanController@hapus_lagu');
Route::get('room_karyawan','MkaryawanController@room');
//Route::get('room_karyawan/tambah','MkaryawanController@tambah_room');
//Route::post('room_karyawan/simpan','MkaryawanController@simpan_room');
//Route::get('data_room','MkaryawanController@room');
//Route::get('edit_room/edit/{room}','MkaryawanController@edit_room');
//Route::post('edit_room/edit/{room}','MkaryawanController@update_room');
//Route::get('hapus_room/hapus/{room}','MkaryawanController@hapus_room');
Route::get('menu_karyawan','MkaryawanController@menu');
Route::get('menu_karyawan/tambah','MkaryawanController@tambah_menu');
Route::post('menu_karyawan/simpan','MkaryawanController@simpan_menu');
Route::get('data_menu','MkaryawanController@menu');
Route::get('edit_menu/edit/{menu}','MkaryawanController@edit_menu');
Route::post('edit_menu/edit/{menu}','MkaryawanController@update_menu');
Route::get('hapus_menu/hapus/{menu}','MkaryawanController@hapus_menu');

	
});




//master-karyawan


//master-member


// Route::get('/',function (Illuminate\Http\Request $request){
// 	echo "ini adalah request dari method get ".$request->nama;
// });

// use Illuminate\Http\Request;
// Route::get('/',function(){
// 	echo Form::open(['url'=>'/']).
// 	Form::label('nama').
// 	Form::text('nama',null).
// 	Form::submit('kirim').
// 	Form::close();
// });
// Route::post('/',function (Request $request){
// 	echo "Hasil dari form input tadi nama : ".$request->nama;
// });

Route::post('/home',function (){
	return view('home');
});

Route::get('daftar_room','homeController@daftar_room');

Route::get('daftar_lagu','homeController@daftar_lagu');

Route::get('daftar_menu','homeController@daftar_menu');

