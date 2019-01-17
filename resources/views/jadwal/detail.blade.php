@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-md-12">
  	  	<h3>Detail Jadwal Siswa</h3>
  	  	<hr>
        <a href="{{route('jadwal.index')}}" class="btn btn-sm btn-success">Kembali</a>
  	  </div>
  	</div>
  <table class="table table-bordered table-sm">
      <tr>
        <th width="300px"><b>Hari</b></th>
        <th width="300px">Nama Guru Pengajar</th>
        <th width="300px">Pelajaran</th>
      </tr>
      <tr>
        <td> SENIN </td>
        <td>{{$jadwal->guru1}}</td>
        <td>{{$jadwal->mapel1}}</td>
      </tr>
      <tr>
        <td> SELASA </td>
        <td> {{$jadwal->guru2}} </td>
        <td> {{$jadwal->mapel2}} </td>
      </tr>
      <tr>
        <td> RABU </td>
        <td> {{$jadwal->guru3}} </td>
        <td> {{$jadwal->mapel3}} </td>
      </tr>
      <tr>
        <td> KAMIS </td>
        <td> {{$jadwal->guru4}} </td>
        <td> {{$jadwal->mapel4}} </td>
      </tr>
      <tr>
        <td> JUMAT </td>
        <td> {{$jadwal->guru5}} </td>
        <td> {{$jadwal->mapel5}} </td> 
      </tr>
    </table>
  </div>
@endsection 