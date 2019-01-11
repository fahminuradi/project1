@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Ubah Jadwal</h3>
  	  </div>
  	</div>

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

    <form action="{{route('jadwal.update',$jadwal->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <img src="{{Storage::url($jadwal->avatar)}}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;">
      <strong>Pilih gambar</strong>
      <input type="file" name="avatar" value="{{$jadwal->avatar}}">
      <div class="col-md-5">
          <h3>SENIN</h3>
        </div>
        <div class="col-md-5">
          <strong>Mata Pelajaran:</strong>
          <input type="text" name="mapel1" class="form-control" value="{{$jadwal->mapel1}}">
        </div>
        <div class="col-md-5">
          <strong>Nama Guru:</strong>
          <input type="text" name="guru1" class="form-control" value="{{$jadwal->guru1}}">
        </div>
        <div class="col-md-5">
          <h3>SELASA</h3>
        </div>
        <div class="col-md-5">
          <strong>Mata Pelajaran:</strong>
          <input type="text" name="mapel2" class="form-control" value="{{$jadwal->mapel2}}">
        </div>
        <div class="col-md-5">
          <strong>Nama Guru:</strong>
          <input type="text" name="guru2" class="form-control" value="{{$jadwal->guru2}}">
        </div>
        <div class="col-md-5">
          <h3>RABU</h3>
        </div>
        <div class="col-md-5">
          <strong>Mata Pelajaran:</strong>
          <input type="text" name="mapel3" class="form-control" value="{{$jadwal->mapel3}}">
        </div>
        <div class="col-md-5">
          <strong>Nama Guru:</strong>
          <input type="text" name="guru3" class="form-control" value="{{$jadwal->guru3}}">
        </div>
        <div class="col-md-5">
          <h3>KAMIS</h3>
        </div>
        <div class="col-md-5">
          <strong>Mata Pelajaran:</strong>
          <input type="text" name="mapel4" class="form-control" value="{{$jadwal->mapel4}}">
        </div>
        <div class="col-md-5">
          <strong>Nama Guru:</strong>
          <input type="text" name="guru4" class="form-control" value="{{$jadwal->guru4}}">
        </div>
        <div class="col-md-5">
          <h3>JUMAT</h3>
        </div>
        <div class="col-md-5">
          <strong>Mata Pelajaran:</strong>
          <input type="text" name="mapel5" class="form-control" value="{{$jadwal->mapel5}}">
        </div>
        <div class="col-md-5">
          <strong>Nama Guru:</strong>
          <input type="text" name="guru5" class="form-control" value="{{$jadwal->guru5}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('jadwal.index')}}" class="btn btn-sm btn-success">Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
        </div>
      </div>
    </form>

  </div>
@endsection
      