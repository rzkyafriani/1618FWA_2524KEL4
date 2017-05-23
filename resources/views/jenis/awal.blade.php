@extends('master')
@section('container')
@if(Auth::user()->level=='admin')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jenis Room</strong>
		<a href="{{url('jenis/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Jenis Room</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Jenis Room</th>
			<th>Kapasitas</th>
			
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $jenis)
		<td>{{ $x++ }}</td>
		<td>{{ $jenis->jenis_room or 'Jenis Room Kosong' }}</td>
		<td>{{ $jenis->kapasitas or 'Kapasitas Kosong' }}</td>
		
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('jenis/edit/'.$jenis->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('jenis/lihat/'.$jenis->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('jenis/hapus/'.$jenis->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	
@elseif(Auth::user()->level == 'member')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jenis Room</strong>
		<!-- <a href="{{url('jenis/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Jenis Room</i></a>
	<div class="clearfix"></div>
	
</div> -->
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Jenis Room</th>
			<th>Kapasitas</th>
		
			
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $jenis)
		<td>{{ $x++ }}</td>
		<td>{{ $jenis->jenis_room or 'Jenis Room Kosong' }}</td>
		<td>{{ $jenis->kapasitas or 'Kapasitas Kosong' }}</td>
		
		
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	
@endif	