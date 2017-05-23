@extends('master')
@section('container')
@if(Auth::user()->level=='admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Pemesanan</strong>
		<!--<a href="{{ url('pesan/tambah') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Pemesanan</a>-->
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
						<th>Total bayar</th>
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
						<td>
							<div class="btn-group" role="group">
								<a href="{{ url('pesan/lihat/'.$pesan->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@stop

@elseif(Auth::user()->level == 'member')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Pemesanan</strong>
		<a href="{{ url('pesan/tambah') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Pemesanan</a>
		<div class="clearfix"></div>
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Member</th>
						<th>Room</th>
						<th>Menu</th>
						<th>Jam Masuk</th>
						<th>Jam Keluar</th>
						<th>Lama Penggunaan</th>
						<th>Total bayar</th>
						</tr>
				</thead>
				<tbody>
					<?php $x=1;?>
					@foreach ($semuaPesan as $pesan)
					<tr>
						<td>{{ $x++}}</td>
						<td>{{ $pesan->member->nama or 'Room Id Kosong'}}</td>
						<td>{{ $pesan->room->nama_room or 'Member Id Kosong'}}</td>
						<td>{{ $pesan->menu->keterangan or 'Menu Id Kosong'}}</td>
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
@endif		

						
