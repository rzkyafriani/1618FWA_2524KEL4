@extends('master-member')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>@foreach($member as $mbr) Seluruh Data {{$mbr->nama}} @endforeach</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telp</th>
			<th>Jenis Kelamin</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($member as $mbr)
		<td>{{ $x++ }}</td>
		<td>{{ $mbr->nama or 'Nama Kosong' }}</td>
		<td>{{ $mbr->alamat or 'Alamat Kosong' }}</td>
		<td>{{ $mbr->no_hp or 'No Telp Kosong' }}</td>
		<td>{{ $mbr->jenis_kelamin or 'Jenis Kelamin Kosong' }}</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	