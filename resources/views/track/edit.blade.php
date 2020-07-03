		@extends('layouts.master')

		@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			 <form action="/track/{{$track->id}}/update" method="POST">
			       	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Track</label>
					    <input name="track_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Track" value="{{$track->track_name}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Album</label>
					    <input name="track_id_album" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Album" value="{{$track->track_id_album}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Waktu</label>
					    <input name="track_time" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Waktu" value="{{$track->track_time}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlFile1">File Track</label>
					    <input name="track_file" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{$track->track_file}}">
					  </div> i
					  <button type="submit" class="btn btn-primary">Update</button>
			        </form>
			        </div>
				</div>
			@endsection
			
