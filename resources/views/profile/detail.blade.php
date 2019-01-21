@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
      <div class="col-md-10">
        <h3>Detail Tentang Siswa</h3>
      </div>
      <div class="col-md-2">
        <a class="btn btn-sm btn-danger" href="{{ route('profile.index') }}">Kembali</a>
      </div>
    </div>
  @foreach($profile as $profile)
  <img src="{{Storage::url($profile->avatar)}}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;">
  	<div class="row">
  	  <div class="col-md-12">
  	  	<div class="form-group">
  	  	  <strong>Nama: </strong> {{$profile->nama}}
  	  	</div>
  	  </div>
  	  <div class="col-md-12">
  	  	<div class="form-group">
  	  	  <strong>Tempat Lahir: </strong> {{$profile->tempat_lahir}}
  	  	</div>
  	  </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Tanggal Lahir: </strong> {{$profile->tanggal_lahir}}
        </div>
      </div>
      <div class="col-md-12">
  	  	<div class="form-group">
  	  	  <strong>Jenis Kelamin: </strong> {{$profile->jenis_kelamin}}
  	  	</div>
  	  </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nomor Telepon: </strong> {{$profile->no_telp}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Kelas: </strong> {{$profile->kelas}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Jurusan: </strong> {{$profile->jurusan}}
        </div>
      </div>  
    </div>
    @endforeach
			<table class="table table-bordered table-sm">
	  	<tr>
	  	  <th width="300px"><b>Hari</b></th>
	 
				<th width="300px">Nama Guru Pengajar</th>
	  	  <th width="300px">Pelajaran</th>
	  	<tr>
        <td> SENIN </td>
        <td>1.{{$profile->guru1}}</td>
        <td>1.{{$profile->mapel1}}</td>
      </tr>
      <tr>
        <td> SELASA </td>
        <td>2.{{$profile->guru2}} </td>
        <td>2.{{$profile->mapel2}} </td>
      </tr>
      <tr>
        <td> RABU </td>
        <td>3.{{$profile->guru3}} </td>
        <td>3.{{$profile->mapel3}} </td>
      </tr>
      <tr>
        <td> KAMIS </td>
        <td>4.{{$profile->guru4}} </td>
        <td>4.{{$profile->mapel4}} </td>
      </tr>
      <tr>
        <td> JUMAT </td>
        <td>5.{{$profile->guru5}} </td>
        <td>5.{{$profile->mapel5}} </td> 
      </tr>	  
      </table>
  	</div>
  </div>
@endsection