@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('pesan') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Pemesanan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Member</td>
			<td>:</td>
			<td>{{ $pesan->member->nama }}</td>
		</tr>
		<tr>
			<td>Room</td>
			<td>:</td>
			<td>{{ $pesan->room->nama_room }}</td>
		</tr>
		
		<tr>
			<td>Jam Masuk</td>
			<td>:</td>
			<td>{{ $pesan->jam_masuk }}</td>
		</tr>
		<tr>
			<td>Jam Keluar</td>
			<td>:</td>
			<td>{{ $pesan->jam_keluar }}</td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td>:</td>
			<td>{{ $pesan->total_bayar }}</td>
		</tr>
		<tr>
			<td>Dibuat tanggal</td>
			<td>:</td>
			<td>{{$pesan->created_at }}</td>
		</tr>

		<tr>
			<td>Diperbarui tanggal</td>
			<td>:</td>
			<td>{{$pesan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 