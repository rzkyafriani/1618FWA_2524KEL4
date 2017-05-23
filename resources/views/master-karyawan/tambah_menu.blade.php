@extends('master-karyawan')
@section('container')
<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('menu') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Tambah Data Menu</strong>
	</div>
		{!! Form::open(['url'=>'menu_karyawan/simpan','class'=>'form-horizontal']) !!}
		@include('master-karyawan.form_menu')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				
</div>
{!! Form::close() !!}
</div>

@stop

