@extends('master-karyawan')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Member</strong>
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
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaMember as $member)
		<td>{{ $x++ }}</td>
		<td>{{ $member->nama or 'Nama Kosong' }}</td>
		<td>{{ $member->alamat or 'Alamat Kosong' }}</td>
		<td>{{ $member->no_hp or 'No Telp Kosong' }}</td>
		<td>{{ $member->jenis_kelamin or 'Jenis Kelamin Kosong' }}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('hapus_member/hapus/'.$member->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	