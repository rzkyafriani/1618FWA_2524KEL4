<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">Alamat</label>
	<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">No Telp</label>
	<div class="col-sm-10">
		{!! Form::text('no_hp',null,['class'=>'form-control','placeholder'=>"No Telp"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_kelamin',array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan'),null,['class'=>'form-control','placeholder'=>"Jenis Kelamin"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
<div class="form-group">
	<div class="col-sm-10">
		{!! Form::hidden('level','admin') !!}
		</div>
</div>

