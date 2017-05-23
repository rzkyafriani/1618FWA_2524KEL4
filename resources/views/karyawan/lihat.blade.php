@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('karyawan') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Karyawan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $karyawan->nama }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $karyawan->alamat }}</td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>:</td>
			<td>{{ $karyawan->no_hp }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{ $karyawan->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $karyawan->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $karyawan->pengguna->password }}</td>
		</tr>
		<tr>
			<td>Dibuat tanggal</td>
			<td>:</td>
			<td>{{$karyawan->created_at }}</td>
		</tr>
		<tr>
			<td class="col-sm-4">Diperbarui tanggal</td>
			<td class="cols-sm-4">:</td>
			<td>{{$karyawan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 