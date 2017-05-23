@extends('master-karyawan')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Lagu</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Penyanyi</th>
			<th>Link</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaLagu as $lagu)
		<td>{{ $x++ }}</td>
		<td>{{ $lagu->judul or 'Judul Kosong' }}</td>
		<td>{{ $lagu->penyanyi or 'Penyanyi Kosong' }}</td>
		<td>{{ $lagu->link or 'Link Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('edit_lagu/edit/'.$lagu->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<!--<a href="{{url('/lihat/'.$lagu->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>-->
				<a href="{{url('hapus_lagu/'.$lagu->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	