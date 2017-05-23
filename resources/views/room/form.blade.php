<div class="form-group">
	<label class="col-sm-2 control-label" id="room_id">Nama Room</label>
	<div class="col-sm-10">
		{!! Form::text('nama_room',null,['class'=>'form-control','placeholder'=>"Nama Room"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="room_id">Jenis Room</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_id',$jenis->lists('jenis_room','id'),null,['class'=>'form-control','id'=>'jenis_id','placeholder'=>"Jenis Room"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="room_id">Harga</label>
	<div class="col-sm-10">
		{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>"Harga"]) !!}
		</div>
</div>

</div>

