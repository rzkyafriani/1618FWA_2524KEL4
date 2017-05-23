@extends('master-karyawan')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('room') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Room</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Room</td>
			<td>:</td>
			<td>{{ $room->nama_room }}</td>
		</tr>
		<tr>
			<td>Dibuat tanggal</td>
			<td>:</td>
			<td>{{$room->created_at }}</td>
		</tr>

		<tr>
			<td>Diperbarui tanggal</td>
			<td>:</td>
			<td>{{$room->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 