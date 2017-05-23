@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('member') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Member</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $member->nama }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $member->alamat }}</td>
		</tr>
		<tr>
			<td>No Telp<td>
			<td>:</td>
			<td>{{ $member->no_hp }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin<td>
			<td>:</td>
			<td>{{ $member->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $member->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $member->pengguna->password }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$member->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$member->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 