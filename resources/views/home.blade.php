@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<h1>Selamat Datang <b>{{ Auth::user()->name }}</b></h1>Semoga harimu menyenangkan<br>klik <a href="{{route('profile.index')}}">disini</a> Untuk melanjutkan <br>
    	</div>
    </div>
</div>
@endsection
