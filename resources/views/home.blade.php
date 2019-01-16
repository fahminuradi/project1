@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>selamat datang <b>{{ Auth::user()->name }}</b></h1>Semoga hari mu menyenangkan <br>tambah biodata? lihat bioadata?mudahh... <br><a href="{{route('profile.index')}}">masuk</a> disini untuk melanjutkan <br>
        </div>
    </div>
</div>
@endsection
