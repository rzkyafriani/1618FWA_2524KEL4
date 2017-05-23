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
	<label class="col-sm-2 control-label" id="ruangan_id">Room</label>
	<div class="col-sm-10">
		{!! Form::select('room_id',$room->listRoomdanJenis(),null,['class'=>'form-control','id'=>'room_id','placeholder'=>"Room"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Menu</label>
	<div class="col-sm-10">
		{!! Form::select('menu_id',$menu->listMenudanKet(),null,['class'=>'form-control','id'=>'menu_id','placeholder'=>"Menu"]) !!}
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


