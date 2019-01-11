@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <h3>Foto profile</h3>
      </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    	<button type="button" class="close" data-dismiss="alert">x</button>
    	<strong>{{ $message }}</strong>
    </div>
    <img src="images/{{ Session::get('image')}}">
    @endif

    @if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>Maaf!!! </strong> Mungkin anda salah memasukkan kata kunci.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
  		@csrf
  		<div class="row">

	  		<div class="col-md-6">
	  		  <input type="file" name="image" class="form-control">
	  		</div>
	  	</div>
  	</form>
  </div>
@endsection