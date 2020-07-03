	@extends('layouts.master')

	@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Data Track</h1>
			</div>
			<div class="col-6">
			<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Track
			</button>
			</div>
			<table class="table table-hover">
				<tr>
					<th>NAMA TRACK</th>
					<th>ALBUM</th>
					<th>WAKTU</th>
					<th>FILE TRACK</th>
					<th>AKSI</th>
				</tr>
				@foreach($data_track as $track)
				<tr>
					<td>{{$track->track_name}}</td>
					<td>{{$track->track_id_album}}</td>
					<td>{{$track->track_time}}</td>
					<td>{{$track->track_file}}</td>
					<td>
						<a href="/track/{{$track->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/track/{{$track->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus ?')" >Delete</a>
					</td>
				</tr>
				@endforeach
				</table>
				</div>
			</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="/track/create" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Track</label>
					    <input name="track_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Track">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Album</label>
					    <input name="track_id_album" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Album">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Waktu</label>
					    <input name="track_time" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Waktu">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlFile1">File Track</label>
					    <input name="track_file" type="file" class="form-control-file" id="exampleFormControlFile1">
					  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			  @endsection