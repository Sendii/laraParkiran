@extends('layout2.app')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
	Tambah Transaksi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('transaksi/save')}}" method="POST">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label class="col-form-label">No Polisi:</label>
								<select name="add_nopol" class="form-control">
									@foreach($konsumens as $k)
									<option value="{{$k->no_polisi}}">{{$k->no_polisi}}</option>
									@endforeach
								</select>
							</div>
							<div class="col">
								<label class="col-form-label">Tanggal Transaksi:</label>
								<div class="input-group date" data-provide="datepicker">
									<input type="text" name="add_tgl_transaksi" class="form-control" autocomplete="off">
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
								<label class="col-form-label">Waktu Masuk:</label>
								<input type="text" class="form-control" name="add_waktu_masuk" placeholder="Auto" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama Konsumen</th>
			<th scope="col">No. Polisi</th>
			<th scope="col">Masuk</th>
			<th scope="col">Keluar</th>
			<th scope="col">Biaya</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($transaksis as $k)
		<tr>
			<th>{{$k->id}}</th>
			<td>{{$k->Konsumen->konsumen}}</td>
			<td>{{$k->no_polisi}}</td>
			<td>{{$k->waktu_masuk}}</td>
			<td>{{$k->waktu_keluar}}</td>
			<td>{{$k->biaya}}</td>
			<td>
				<a href="{{url('transaksi/edit', $k->id)}}">
					Edit
				</a>
				<a href="{{url('transaksi/delete', $k->id)}}">
					Delete
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection