@extends('master-karyawan')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('karyawan') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Karyawan</strong>
	</div>
		{!! Form::model($kry,['url'=>'edit_karyawan/edit/'.$kry->id,'class'=>'form-horizontal  ']) !!}
		@include('master-karyawan.form_karyawan')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop