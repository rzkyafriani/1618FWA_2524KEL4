<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Member</label>
	<div class="col-sm-10">
		{!! Form::text('member_id',Auth::user()->member->id,['class'=>'form-control','id'=>'member_id','placeholder'=>"Member",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',Auth::user()->member->nama,['class'=>'form-control','id'=>'member_id','placeholder'=>"Member",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<div class="col-sm-10">
		{!! Form::hidden('room_id',$room->id,['class'=>'form-control','id'=>'room_id','placeholder'=>"Room",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Room</label>
	<div class="col-sm-10">
		{!! Form::text('nama_room',$room->nama_room,['class'=>'form-control','id'=>'room_id','placeholder'=>"Room",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Harga Room</label>
	<div class="col-sm-10">
		{!! Form::text('harga',$room->harga,['class'=>'form-control','id'=>'room_id','placeholder'=>"Room",'readonly']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jam Masuk</label>
	<div class="col-sm-10">
		{!! Form::time('jam_masuk',null,['class'=>'form-control']) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jam Keluar</label>
	<div class="col-sm-10">
		{!! Form::time('jam_keluar',null,['class'=>'form-control']) !!}
		</div>
</div>


