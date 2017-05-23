@extends('master-karyawan')
@section('container')


<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('menu') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Menu</strong>
	</div>
		{!! Form::model($menu,['url'=>'edit_menu/edit/'.$menu->id,'class'=>'form-horizontal']) !!}
		@include('master-karyawan.form_menu')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop