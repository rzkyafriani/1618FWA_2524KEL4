@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('lagu') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Lagu</strong>
	</div>
	<table class="table">
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>{{ $lagu->judul }}</td>
		</tr>

		<tr>
			<td>Penyanyi</td>
			<td>:</td>
			<td>{{ $lagu->penyanyi }}</td>
		</tr>

		<tr>
			<td>Streaming</td>
			<td>:</td>
			<td>{{ $lagu->link }}</td>
		</tr>

		<tr>
			<td>Dibuat tanggal</td>
			<td>:</td>
			<td>{{$lagu->created_at }}</td>
		</tr>

		<tr>
			<td>Diperbarui tanggal</td>
			<td>:</td>
			<td>{{$lagu->updated_at }}</td>
		</tr>
	</table>
</div>
@stop