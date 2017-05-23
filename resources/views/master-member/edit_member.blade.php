@extends('master-member')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('master-member') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Member</strong>
	</div>
		{!! Form::model($mbr,['url'=>'edit_member/edit/'.$mbr->id,'class'=>'form-horizontal  ']) !!}
		@include('master-member.form_member')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop