		@extends('layouts.master')

		@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Data Artist</h1>
			</div>
			<div class="col-6">
			<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Artist
			</button>
			</div> 
			<table class="table table-hover">
				<tr>
					<th>NAMA ARTIS</th>
					<th>AKSI</th>
				</tr>
				@foreach($data_artist as $artist)
				<tr>
					<td>{{$artist->artist_name}}</td>
					<td>
						<a href="/artist/{{$artist->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/artist/{{$artist->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus ?')" >Delete</a>
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
			       <form action="/artist/create" method="POST">
			       	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Artist</label>
					    <input name="artist_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Artist">
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