@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data karyawan</strong>
		<a href="{{url('karyawan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">karyawan</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaKaryawan as $karyawan)
		<td>{{ $x++ }}</td>
		<td>{{ $karyawan->nama or 'nama Kosong' }}</td>
		<td>{{ $karyawan->alamat or 'alamat Kosong' }}	</td>
		<td>{{ $karyawan->no_hp or 'No Hp Kosong' }}	</td>
		<td>{{ $karyawan->jenis_kelamin or 'alamat Kosong' }}	</td>		
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('karyawan/edit/'.$karyawan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('karyawan/lihat/'.$karyawan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('karyawan/hapus/'.$karyawan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	