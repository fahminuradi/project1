@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Ubah data</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>Mohon, </strong> ubah kembali.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('profile.update',$profile->id)}}" method="post">
  	  @csrf
      @method('PUT')
  	  <div class="row">
  	  	<div class="col-md-5">
  	  	  <strong>Nama: </strong>
  	  	  <input type="text" name="nama" class="form-control" value="{{$profile->nama}}">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Tempat Lahir :</strong>
  	  	  <input type="text" name="tempat_lahir" class="form-control" value="{{$profile->tempat_lahir}}">
  	  	</div>
        <div class="col-md-5">
          <strong>Tanggal Lahir :</strong>
          <input type="date" name="tanggal_lahir" class="form-control" value="{{$profile->tanggal_lahir}}">
        </div>
        <div class="col-md-5">
          <strong>No Telpon :</strong>
          <input type="text" name="no_telp" class="form-control" value="{{$profile->no_telp}}">
        </div>
        <div class="select">
          <strong>Jenis Kelamin</strong>
          <strong>
          <select name="jenis_kelamin">
            <option value="....">....</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          </strong>
        </div>
  	  	<div class="col-md-12">
  	  	  <a href="{{route('profile.index')}}" class="btn btn-sm btn-success">kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection