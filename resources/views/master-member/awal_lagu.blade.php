@extends('master-member')
@section('container')
<style type="text/css">
	
</style>
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
			<th>Streaming</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaLagu as $lagu)
		<td>{{ $x++ }}</td>
		<td>{{ $lagu->judul or 'Judul Kosong' }}</td>
		<td>{{ $lagu->penyanyi or 'Penyanyi Kosong' }}</td>
		<td><a href="{{$lagu->link}}"><i class="fa fa-youtube"></i> {{$lagu->judul}}</a></td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	