@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Masukan data diri anda di bawah ini:</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>maaf, </strong> coba ulangi kembali.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('profile.store')}}" method="post">
  	  @csrf
  	  <div class="row">
  	  	<div class="col-md-8">
  	  	  <strong>Nama: </strong>
  	  	  <input type="text" name="nama" class="form-control" placeholder="masukan nama anda disini">
  	  	</div>
  	  	<div class="col-md-8">
  	  	  <strong>Tempat Lahir: </strong>
  	  	  <input type="text" name="tempat_lahir" class="form-control" placeholder="masukan kota kelahiran anda">
  	  	</div>
        <div class="col-md-8">
          <strong>Tanggal Lahir:</strong>
          <input type="date" name="tanggal_lahir" class="form-control">
        </div>
        <div class="col-md-8">
          <strong>Nomor Telepon: </strong>
          <input type="text" name="no_telp" class="form-control" placeholder="masukan no telpon anda">
        </div>
				<div class="col-md-10">
          <strong>Jenis Kelamin</strong>
          <strong>
          <select name="jenis_kelamin">
            <option value="....">....</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          </strong>
				</div>
  	  	<div class="col-md-10">
  	  	  <a href="{{route('profile.index')}}" class="btn btn-sm btn-danger">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">tambahkan</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection