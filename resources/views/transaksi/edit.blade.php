@extends('layout2.app')

@section('content')
<form action="{{url('konsumen/update')}}" method="POST">
	@csrf
	<div class="modal-body">
		<div class="form-group">
			<div class="row">
				<div class="col">
					<label class="col-form-label">Konsumen:</label>
					<input type="hidden" name="edit_id" value="{{$edits->id}}">
					<input type="text" class="form-control" name="edit_konsumen" value="{{$edits->konsumen}}">
				</div>
				<div class="col">
					<label class="col-form-label">Jenis Kendaraan:</label>
					<select name="edit_jenis_kendaraan" value="{{$edits->jenis_kendaraan}}" class="form-control">
						<option value="Mobil">Mobil</option>
						<option value="Motor">Motor</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col">
					<label class="col-form-label">No. Polisi:</label>
					<input type="text" class="form-control" name="edit_no_polisi" value="{{$edits->no_polisi}}">
				</div>
				<div class="col">
					<label class="col-form-label">Tanggal Lahir:</label>
					<div class="input-group date" data-provide="datepicker">
						<input type="text" name="edit_tgl_lahir" value="{{$edits->tgl_lahir}}" class="form-control" autocomplete="off">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col">
					<label class="col-form-label">Kelamin:</label>
					<select name="edit_jenis_kelamin" value="{{$edits->jenis_kelamin}}" class="form-control">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
				<div class="col">
					<label class="col-form-label">No. HP:</label>
					<input type="text" class="form-control" name="edit_no_hp" value="{{$edits->no_hp}}">
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Save changes</button>
	</div>
</form>
@endsection