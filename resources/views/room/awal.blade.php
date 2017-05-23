@extends('master')
@section('container')
@if(Auth::user()->level=='admin')
	<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Room</strong>
		<a href="{{ url('room/tambah') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Room</a>
		<div class="clearfix"></div>
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Room</th>
						<th>Jenis Room</th>
						<th>Kapasitas</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $x=1;?>
					@foreach ($semuaRoom as $room)
					<tr>
						<td>{{ $x++}}</td>
						<td>{{ $room->nama_room or 'Nama Room Kosong'}}</td>
						<td>{{ $room->jenis->jenis_room or 'Jenis Room Kosong'}}</td>
						<td>{{ $room->jenis->kapasitas or 'Kapasitas Kosong'}}</td>
						<td>{{ $room->harga or 'Harga Kosong'}}</td>
						<td>
							<div class="btn-group" role="group">
								<a href="{{ url('room/edit/'.$room->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
								<a href="{{ url('room/lihat/'.$room->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
								<a href="{{ url('room/hapus/'.$room->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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
		<strong>Seluruh Data Room</strong>
		<div class="clearfix"></div>
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Room</th>
						<th>Jenis Room</th>
						<th>Kapasitas</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $x=1;?>
					@foreach ($semuaRoom as $room)
					<tr>
						<td>{{ $x++}}</td>
						<td>{{ $room->nama_room or 'Nama Room Kosong'}}</td>
						<td>{{ $room->jenis->jenis_room or 'Jenis Room Kosong'}}</td>
						<td>{{ $room->jenis->kapasitas or 'Kapasitas Kosong'}}</td>
						<td>{{ $room->jenis->harga or 'Harga Kosong'}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@stop
@endif
						
