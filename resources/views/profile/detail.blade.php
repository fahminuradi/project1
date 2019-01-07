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
    <div>
      <form enctype="multipart/form-data" action="/profile" method="POST">
			<img src="/uploads/avatars/{{ $profile->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">   
      </form>
    </div>
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
          <strong>Kelas: </strong>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Jurusan: </strong> 
        </div>
      </div>
			<table class="table table-bordered table-sm">
	  	<tr>
	  	  <th width="300px"><b>Hari</b></th>
	  	  <th width="300px">Lama Pelajaran</th>
				<th width="300px">Nama Guru Pengajar</th>
	  	  <th width="300px">Pelajaran</th>
	  	</tr>
      <tr>
        <td> . </td>
        <td> . </td>
        <td> . </td>
        <td> . </td>
      </tr>
      <tr>
        <td> . </td>
        <td> . </td>
        <td> . </td>
        <td> . </td>
      </tr>
      <tr>
        <td> . </td>
        <td> . </td>
        <td> . </td>
        <td> . </td>
      </tr>
      <tr>
        <td> . </td>
        <td> . </td>
        <td> . </td>
        <td> . </td>
      </tr>
      <tr>
        <td> . </td>
        <td> . </td>
        <td> . </td>
        <td> . </td>
      </tr>
	  </table>
  	</div>
  </div>
@endsection