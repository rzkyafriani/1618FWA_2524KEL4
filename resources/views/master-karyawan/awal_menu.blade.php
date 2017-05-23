@extends('master-karyawan')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Menu</strong>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Paket</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $menu)
		<td>{{ $x++ }}</td>
		<td>{{ $menu->paket_makan_minum or 'Paket Makan dan Minum Kosong' }}</td>
		<td>{{ $menu->keterangan or 'Keterangan Kosong' }}</td>
		<td>{{ $menu->harga or 'Harga Kosong' }}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('edit_menu/edit/'.$menu->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<!--<a href="{{url('menu/lihat/'.$menu->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>-->
				<a href="{{url('hapus_menu/hapus/'.$menu->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	