@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
      <div class="col-md-10">
        <h3>Detail Tentang Siswa</h3>
      </div>
      <div class="col-md-2">
        <a class="btn btn-sm btn-danger" href="{{ route('grade.index') }}">Kembali</a>
      </div>
    </div>
  	<div class="col-md-12">
        <div class="form-group">
          <strong>kelas: </strong> {{$grade->kelas}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>kelas: </strong> {{$grade->jurusan}}
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
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
	  </table>
  	</div>
  </div>
@endsection