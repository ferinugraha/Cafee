@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        Halo, selamat datang <b>{{ Auth::user()->name }}</b>. Ini adalah halaman admin, dimana hanya admin yang bisa mengakses halaman ini.
    </div>
@endsection