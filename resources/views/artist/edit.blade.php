		@extends('layouts.master')

		@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			 <form action="/artist/{{$artist->id}}/update" method="POST">
			       	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Artist</label>
					    <input name="artist_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Artist" value="{{$artist->artist_name}}">
					  </div>
					  <button type="submit" class="btn btn-primary">Update</button>
			        </form>
			        </div>
				</div>
			@endsection
