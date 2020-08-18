@extends('layout2.app')

@section('content')
<form action="{{url('transaksi/update')}}" method="POST">
	@csrf
	<div class="modal-body">
		<div class="form-group">
			<div class="row">
				<div class="col">
					<label class="col-form-label">Konsumen:</label>
					<input type="hidden" name="edit_id" value="{{$edits->id}}">
					<input type="text" class="form-control" name="edit_konsumen" value="{{$edits->Konsumen->konsumen}}" readonly>
				</div>
				<div class="col">
					<label class="col-form-label">No. Polisi:</label>
					<input type="text" class="form-control" name="edit_no_polisi" value="{{$edits->no_polisi}}" readonly>
				</div>				
			</div>
		</div>		
		<div class="form-group">
			<div class="row">
				<div class="col">
					<label class="col-form-label">Waktu Masuk:</label>
					<input type="text" class="form-control" name="edit_waktu_masuk" placeholder="Auto" value="{{$edits->waktu_masuk}}" readonly>
				</div>
				<div class="col">
					<label class="col-form-label">Waktu Keluar:</label>
					<input type="text" class="form-control" name="edit_waktu_keluar" placeholder="Auto" readonly>
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