@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Input Jadwal Pelajaran</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>Maaf!!! </strong> Masukan kembali<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('jadwal.store')}}" method="post">
  	  @csrf
    	  	<div class="col-md-5">
  	  	  <h3>SENIN</h3>
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Mata Pelajaran:</strong>
  	  	  <input type="text" name="mapel1" class="form-control" placeholder="Masukan pelajaran disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Nama Guru:</strong>
  	  	  <input type="text" name="guru1" class="form-control" placeholder="Masukan Nama guru disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <h3>SELASA</h3>
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Mata Pelajaran:</strong>
  	  	  <input type="text" name="mapel2" class="form-control" placeholder="Masukan pelajaran disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Nama Guru:</strong>
  	  	  <input type="text" name="guru2" class="form-control" placeholder="Masukan Nama guru disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <h3>RABU</h3>
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Mata Pelajaran:</strong>
  	  	  <input type="text" name="mapel3" class="form-control" placeholder="Masukan pelajaran disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Nama Guru:</strong>
  	  	  <input type="text" name="guru3" class="form-control" placeholder="Masukan Nama guru disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <h3>KAMIS</h3>
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Mata Pelajaran:</strong>
  	  	  <input type="text" name="mapel4" class="form-control" placeholder="Masukan pelajaran disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Nama Guru:</strong>
  	  	  <input type="text" name="guru4" class="form-control" placeholder="Masukan Nama guru disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <h3>JUMAT</h3>
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Mata Pelajaran:</strong>
  	  	  <input type="text" name="mapel5" class="form-control" placeholder="Masukan pelajaran disini">
  	  	</div>
  	  	<div class="col-md-5">
  	  	  <strong>Nama Guru:</strong>
  	  	  <input type="text" name="guru5" class="form-control" placeholder="Masukan Nama guru disini">
  	  	</div>

  	  	<div class="col-md-12">
  	  	  <a href="{{route('profile.index')}}" class="btn btn-sm btn-success">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Tambahkan</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection
      