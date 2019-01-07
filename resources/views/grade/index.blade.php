@extends('layouts.app')
@section('content')

	<div class="container">
	  <div class="row">
	  	<div class="col-md-5">
	  	  <h3>Data Kelas yang terdaftar</h3>
	  	</div>
	  	<div class="col-sm-2">
	  	  <a class="btn btn-sm btn-success" href="{{ route('grade.create') }}">Masuk</a>
	  	</div>
	  </div>

	  @if ($message = Session::get('success'))
	    <div class="alert alert-success">
	      <p>{{$message}}</p>
	    </div>
	  @endif

	  <table class="table table-hover table-sm">
	  	<tr>
	  	  <th width="50px"><b>Nomor</b></th>
	  	  <th width="300px">Kelas</th>
	  	  <th width="300px">Jurusan</th>
	  	  <th width="400px">Aksi</th>
	  	</tr>

	  	@foreach ($grades as $grade)
	  	  <tr>
	  	  	<td><b>{{++$i}}.</b></td>
	  	  	<td>{{$grade->kelas}}</td>
	  	  	<td>{{$grade->jurusan}}</td>
	  	  	<td>
	  	  	  <form action="{{ route('grade.destroy', $grade->id) }}" method="post">
	  	  	  	<a class="btn btn-sm btn-primary" href="{{route('grade.show',$grade->id)}}">Selengkapnya</a>
	  	  	  	<a class="btn btn-sm btn-warning" href="{{route('grade.edit',$grade->id)}}">Ubah</a>
	  	  	  	@csrf
	  	  	  	@method('DELETE')
	  	  	  	<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	  	  	  </form>
	  	  	</td>
	  	  </tr>
	  	@endforeach	
	  </table>

{!! $grades->links() !!}
	</div>
@endsection