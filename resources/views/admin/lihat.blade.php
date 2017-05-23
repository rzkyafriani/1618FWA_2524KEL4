@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('admin') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Admin</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $admin->nama }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $admin->alamat }}</td>
		</tr>
		<tr>
			<td>No Telp<td>
			<td>:</td>
			<td>{{ $admin->no_hp }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin<td>
			<td>:</td>
			<td>{{ $admin->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $admin->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $admin->pengguna->password }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$admin->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$admin->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 