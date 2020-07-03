	@extends('layouts.master')

	@section('content')

		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Data Album</h1>
			</div>
			<div class="col-6">
			<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Album
			</button>
			</div>
			<table class="table table-hover">
				<tr>
					<th>NAMA ALBUM</th>
					<th>ARTIS</th>
					<th>AKSI</th>
				</tr>
				@foreach($data_album as $album)
				<tr>
					<td>{{$album->album_name}}</td>
					<td>{{$album->album_id_artist}}</td>
					<td>
						<a href="/album/{{$album->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/album/{{$album->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus ?')">Delete</a>
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
			         <form action="/album/create" method="POST">
      				{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Album</label>
					    <input name="album_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Album">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Artist</label>
					    <input name="album_id_artist" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Artist">
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