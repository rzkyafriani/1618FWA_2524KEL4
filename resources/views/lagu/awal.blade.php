@extends('master')
@section('container')
@if(Auth::user()->level=='admin')
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
		<td>{{ $lagu->link or 'Link Kosong' }}</td>
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
		<strong>Seluruh Data Lagu</strong>
		<a href="{{url('lagu/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Lagu</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Penyanyi</th>
			
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaLagu as $lagu)
		<td>{{ $x++ }}</td>
		<td>{{ $lagu->judul or 'Judul Kosong' }}</td>
		<td>{{ $lagu->penyanyi or 'Penyanyi Kosong' }}</td>
		
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	
@endif	
