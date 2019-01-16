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
    @foreach ($profile as $profile)
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
      @endforeach
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