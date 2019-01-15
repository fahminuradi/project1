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

  	<form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
  	  @csrf
      @method('PUT')
  	  <div class="row">
        <div class="col-md-5"> 
          <img src="{{Storage::url($profile->avatar)}}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;">
          <strong>Pilih Gambar</strong>
          <input type="file" name="avatar" value="{{$profile->avatar}}">
        </div>
      </div>
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
       
				<div>
				<strong>Ubah Kelas:</strong>
      <h4><select name="kelas">
        <option value="...">...</option>
        <option value="Sepuluh">Sepuluh</option>
        <option value="Sebelas">Sebelas</option>
        <option value="Duabelas">Duabelas</option>
      </select>
      </h4>
    <strong>ubah Jurusan:</strong>
      <h4><select name="jurusan">
        <option value="...">...</option>
        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Farmasi">Farmasi</option>
      </select>
			</div>
  	  	<div class="col-md-12">
  	  	  <a href="{{route('profile.index')}}" class="btn btn-sm btn-success">kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection