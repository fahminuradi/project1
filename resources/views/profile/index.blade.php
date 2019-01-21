@extends('layouts.app')
@section('content')
	<div class="container">
	  <div class="row">
	  	<div class="col-sm-8">
	  	  <h3>Data Siswa</h3>
	  	</div>
	  	<strong>Tambahkan:
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('profile.create')}}">PROFILE</a>
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('grade.create')}}">KELAS</a>
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('jadwal.create')}}">JADWAL</a>
	  	</strong>
	  @if ($message = Session::get('success'))
	    <div class="alert alert-success">
	      <p>{{$message}}</p>
	    </div>
	  @endif
	  <table class="table table-hover table-sm">
	  	<tr>
	  	  <th width="50px"><b>Nomor</b></th>
	  	  <th width="300px">Nama</th>
		  <th width="200px">Kelas</th>
		  <th width="500px">Jurusan</th>
	  	  <th width="350px">Aksi</th>
	  	</tr>
	  	@foreach ($profiles as $profile)
	  	<tr>
	  	  <td><b>{{++$i}}.</b></td>
	      <td>{{$profile->nama}}</td>
		  <td>{{$profile->kelas}}</td>
		  <td>{{$profile->jurusan}}</td>
		  <td>
	  	    <form action="{{route('profile.destroy',$profile->id)}}" method="post">
	  	  	  <a class="btn btn-sm btn-primary" href="{{route('profile.show',$profile->id)}}">Selengkapnya</a>
	  	  	  <a class="btn btn-sm btn-warning" href="{{route('profile.edit',$profile->id)}}">Ubah</a>
	  	  	  @csrf
	  	  	  @method('DELETE')
	  	  	  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
	  	  	</form>
	  	  </td>
	  	</tr>	
		@endforeach
	  </table>
	</div>
@endsection