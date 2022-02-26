@extends('layouts.user')
@section('content')
    <div class="page-wrapper">
        <p>Selamat Datang <b>{{ Auth::user()->name }}</b> Di Halaman Ini.</p>
    </div>
@endsection