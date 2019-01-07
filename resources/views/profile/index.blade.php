@extends('layouts.app')
@section('content')

	<div class="container">
	  <div class="row">
	  	<div class="col-sm-10">
	  	  <h3>Halaman Biodata</h3>
	  	</div>
	  	<strong>Tambahkan:
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('profile.create')}}">profile</a>
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('grade.create')}}">kelas</a>
	  	  	  	<a class="btn btn-sm btn-primary" href="#">jadwal</a>
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
	  	  <th width="300px">Tempat Lahir</th>
	  	  <th width="250px">Tanggal Lahir</th>
	  	  <th width="250px">Jenis Kelamin</th>
	  	  <th width="300px">Nomor Telepon</th>
	  	  <th width="400px">Aksi</th>
	  	</tr>

	  	@foreach ($profiles as $profile)
	  	  <tr>
	  	  	<td><b>{{++$i}}.</b></td>
	  	  	<td>{{$profile->nama}}</td>
	  	  	<td>{{$profile->tempat_lahir}}</td>
			<td>{{$profile->tanggal_lahir}}</td>
			<td>{{$profile->jenis_kelamin}}</td>
			<td>{{$profile->no_telp}}</td>
	  	  	<td>
	  	  	  <form action="{{ route('profile.destroy', $profile->id) }}" method="post">
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

{!! $profiles->links() !!}
	</div>
@endsection