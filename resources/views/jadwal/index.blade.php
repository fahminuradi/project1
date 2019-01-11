@extends('layouts.app')
@section('content')

	<div class="container">
	  <div class="row">
	  	<div class="col-md-10">
	  	  <h3>Jadwal Pelajaran</h3>
	  	</div>
	  	<div class="col-sm-2">
	  	  <a class="btn btn-sm btn-success" href="{{ route('jadwal.create') }}">buat jadwal baru</a>
	  	</div>
	  </div>

	  @if ($message = Session::get('success'))	
	    <div class="alert alert-success">
	      <p>{{$message}}</p>
	    </div>
	  @endif

	  <table class="table table-bordered table-sm">
	  	<tr>
	  	  <th width="300px">Hari</th>
	  	  <th width="300px">Mata Pelajaran</th>
	  	  <th width="300px">Nama Guru Pengajar</th>
	  	  <th width="100px">Pilihan</th>
	  	</tr>

	  	@foreach ($jadwals as $jadwal)
	  	  <tr>
	  	  	<td>1. SENIN <br>2. SELASA <br>3. RABU <br>4.KAMIS <br>5. JUMAT</td>
	  	  	<td>1. {{$jadwal->mapel1}} <br>2. {{$jadwal->mapel2}} <br>3. {{$jadwal->mapel3}} <br>4. {{$jadwal->mapel4}} <br>5. {{$jadwal->mapel5}}
	  	  	</td>
	  	  	<td>1. {{$jadwal->guru1}}<br>2. {{$jadwal->guru2}}<br>3. {{$jadwal->guru3}}<br>4. {{$jadwal->guru4}}<br>5. {{$jadwal->guru5}}</td>
	  	  <td>	  	  
	  	  <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="post">
	  	  	  	<a class="btn btn-sm btn-success" href="{{route('jadwal.show',$jadwal->id)}}">Tampilkan</a>
	  	  	  	<a class="btn btn-sm btn-warning" href="{{route('jadwal.edit',$jadwal->id)}}">Ubah</a>
	  	  	  	@csrf
	  	  	  	@method('DELETE')
	  	  	  	<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
	  	  	  </form>
	  	  	</td>
	  	  </tr>
	  	@endforeach	
	  </table>

{!! $jadwals->links() !!}
	</div>
@endsection
