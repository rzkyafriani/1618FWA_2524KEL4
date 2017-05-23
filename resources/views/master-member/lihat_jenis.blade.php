@extends('master-member')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('jenis') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Jenis Room</strong>
	</div>
	<table class="table">
		<tr>
			<td>Jenis Room</td>
			<td>:</td>
			<td>{{ $jenis->jenis_room }}</td>
		</tr>

		<tr>
			<td>Kapasitas</td>
			<td>:</td>
			<td>{{ $jenis->kapasitas }}</td>
		</tr>

		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $jenis->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jenis->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jenis->updated_at }}</td>
		</tr>
	</table>
</div>
@stop