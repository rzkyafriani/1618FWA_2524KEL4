@extends('master-karyawan')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('menu') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Menu</strong>
	</div>
	<table class="table">
		<tr>
			<td>Paket</td>
			<td>:</td>
			<td>{{ $menu->paket_makan_minum }}</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $menu->keterangan }}</td>
		</tr>

		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $menu->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$menu->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$menu->updated_at }}</td>
		</tr>
	</table>
</div>
@stop