@extends('master-karyawan')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Pemesanan</strong>
		<div class="clearfix"></div>
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Member</th>
						<th>Room</th>
						<th>Jam Masuk</th>
						<th>Jam Keluar</th>
						<th>Lama Penggunaan</th>
						<th>Total Bayar</th>
					</tr>
				</thead>
				<tbody>
					<?php $x=1;?>
					@foreach ($semuaPesan as $pesan)
					<tr>
						<td>{{ $x++}}</td>
						<td>{{ $pesan->member->nama or 'Room Id Kosong'}}</td>
						<td>{{ $pesan->room->nama_room or 'Member Id Kosong'}}</td>
						<td>{{ $pesan->jam_masuk or 'Jam Masuk Kosong'}}</td>
						<td>{{ $pesan->jam_keluar or 'Jam Keluar Kosong'}}</td>
						<td>{{ $pesan->lama or 'Lama Kosong'}} jam</td>
						<td>{{ $pesan->total_bayar or 'kosong'}}</td>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@stop
		

						
