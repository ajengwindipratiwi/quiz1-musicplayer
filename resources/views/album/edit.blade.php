		@extends('layouts.master')

		@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			 <form action="/album/{{$album->id}}/update" method="POST">
			       	{{csrf_field()}}
					   <div class="form-group">
					    <label for="exampleInputEmail1">Nama Album</label>
					    <input name="album_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Album" value="{{$album->album_name}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Artist</label>
					    <input name="album_id_artist" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Artist" value="{{$album->album_id_artist}}">
					  </div>
					  <button type="submit" class="btn btn-primary">Update</button>
			        </form>
			        </div>
				</div>
			@endsection