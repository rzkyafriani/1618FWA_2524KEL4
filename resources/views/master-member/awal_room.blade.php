@extends('master-member')
@section('container')
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
								<a href="{{ url('member_pesan/tambah/'.$room->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Pesan"><i class="fa fa-pencil"></i> Pesan</a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@stop
		

						
