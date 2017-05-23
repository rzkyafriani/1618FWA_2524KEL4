@extends('master')
@section('container')


<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('jenis') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Jenis Room</strong>
	</div>
		{!! Form::model($jenis,['url'=>'jenis/edit/'.$jenis->id,'class'=>'form-horizontal']) !!}
		@include('jenis.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop