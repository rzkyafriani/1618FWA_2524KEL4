@extends('master-member')
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
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	