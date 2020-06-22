@extends('layout2.app')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
	Tambah Konsumen
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Konsumen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('konsumen/save')}}" method="POST">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label class="col-form-label">Konsumen:</label>
								<input type="text" class="form-control" name="add_konsumen">
							</div>
							<div class="col">
								<label class="col-form-label">Jenis Kendaraan:</label>
								<select name="add_jenis_kendaraan" class="form-control">
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
								<input type="text" class="form-control" name="add_no_polisi">
							</div>
							<div class="col">
								<label class="col-form-label">Tanggal Lahir:</label>
								<div class="input-group date" data-provide="datepicker">
									<input type="text" name="add_tgl_lahir" class="form-control" autocomplete="off">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-th"></span>
									</div>
								</div>
								<!-- <input type="text" class="form-control" name="add_tgl_lahir"> -->
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label class="col-form-label">Kelamin:</label>
								<select name="add_jenis_kelamin" class="form-control">
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
							<div class="col">
								<label class="col-form-label">No. HP:</label>
								<input type="text" class="form-control" name="add_no_hp">
							</div>
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="message-text" class="col-form-label">Message:</label>
						<input type="text" class="form-control">
					</div> -->
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
			<th scope="col">Jenis Kendaraan</th>
			<th scope="col">No. Polisi</th>
			<th scope="col">Tanggal Lahir</th>
			<th scope="col">Kelamin</th>
			<th scope="col">No. HP</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($konsumens as $k)
		<tr>
			<th>{{$k->id}}</th>
			<td>{{$k->konsumen}}</td>
			<td>{{$k->jenis_kendaraan}}</td>
			<td>{{$k->no_polisi}}</td>
			<td>{{$k->tgl_lahir}}</td>
			<td>{{$k->jenis_kelamin}}</td>
			<td>{{$k->no_hp}}</td>
			<td>
				<a href="{{url('konsumen/edit', $k->id)}}">
					Edit
				</a>
				<a href="{{url('konsumen/delete', $k->id)}}">
					Delete
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection