@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Member</strong>
		<!--<a href="{{url('member/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Member</i></a>-->
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
				<a href="{{url('member/lihat/'.$member->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	