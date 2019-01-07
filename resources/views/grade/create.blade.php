@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Masukan Kelas dan Jurusan</h3>
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
    <strong>Masukan Kelas:</strong>
      <h4><select name="kelas">
        <option value="...">...</option>
        <option value="Sepuluh">Sepuluh</option>
        <option value="Sebelas">Sebelas</option>
        <option value="Duabelas">Duabelas</option>
      </select>
      </h4>
    <strong>Masukan Jurusan:</strong>
      <h4><select name="jurusan">
        <option value="...">...</option>
        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Farmasi">Farmasi</option>
      </select>
      </h4>
  	  	<div class="col-md-3">
  	  	  <a href="{{route('profile.create')}}" class="btn btn-sm btn-success">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Masuk</button>
  	  	</div>
  	  </div>
  	</form>
  </div>
  </div>
@endsection