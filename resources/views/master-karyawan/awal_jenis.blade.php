@extends('master-karyawan')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jenis Room</strong>
	<div class="clearfix"></div>
	
</div>
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