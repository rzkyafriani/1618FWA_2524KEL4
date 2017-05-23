@extends('master-karyawan')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>@foreach($karyawan as $kry) Seluruh Data {{$kry->nama}} @endforeach</strong>
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
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($karyawan as $kry)
		<td>{{ $x++ }}</td>
		<td>{{ $kry->nama or 'nama Kosong' }}</td>
		<td>{{ $kry->alamat or 'alamat Kosong' }}	</td>
		<td>{{ $kry->no_hp or 'No Hp Kosong' }}	</td>
		<td>{{ $kry->jenis_kelamin or 'alamat Kosong' }}	</td>			
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	