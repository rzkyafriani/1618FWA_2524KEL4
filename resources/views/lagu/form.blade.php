<div class="form-group">
	<label class="col-sm-2 control-label">Karyawan</label>
	<div class="col-sm-10">
		{!! Form::text('karyawan_id',Auth::user()->karyawan->id,['class'=>'form-control','placeholder'=>"Judul"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Judul</label>
	<div class="col-sm-10">
		{!! Form::text('judul',null,['class'=>'form-control','placeholder'=>"Judul"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Penyanyi</label>
	<div class="col-sm-10">
		{!! Form::text('penyanyi',null,['class'=>'form-control','placeholder'=>"Penyanyi"]) !!}
		</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Streaming</label>
	<div class="col-sm-10">
		{!! Form::text('link',null,['class'=>'form-control','placeholder'=>"Link"]) !!}
		</div>

</div>
