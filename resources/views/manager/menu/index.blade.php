{{-- @extends('layouts.manager')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Menu</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('menu.create') }}"> Create</a>
                </div>
            </div>
        </div>

        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th width="160px">Action</th>
            </tr>
            @foreach ($produk as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>
                    <img src="{{ asset('uploads/produks/'.$item->gambar) }}" width="90px" height="90px" alt="image">
                </td>
                <td>{{ $item->menu }}</td>
                <td>Rp {{ number_format($item->harga,0,',','.') }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    <form action="{{ route('menu.destroy',$item->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('menu.edit',$item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $produk->links() !!}
    </div>
@endsection --}}

@extends('layouts.manager')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/redirects') }}" class="link">
                    <i class="mdi mdi-home-outline fs-4"></i>
                    </a>
                </li>
                {{-- <a class="breadcrumb-item active" href="{{ route('menu.create') }}"> Create</a> --}}
                <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="d-md-flex">
                    <div>
                        <a class="btn btn-success" href="{{ route('menu.create') }}"> Create</a>
                        {{-- <a class="btn btn-success" href="{{ url('add-produk') }}">Create</a> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">
                        <thead>
                        <tr>
                            <th class="border-top-0">No</th>
                            <th class="border-top-0">Gambar</th>
                            <th class="border-top-0">Nama Produk</th>
                            <th class="border-top-0">Harga</th>
                            <th class="border-top-0">Jumlah</th>
                            <th class="border-top-0">Deskripsi</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                        </thead>
                        <br>
                        
                        <tbody>
                            @foreach ($menu as $item)

                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <img src="{{ asset('uploads/produks/'.$item->gambar) }}" width="90px" height="90px" alt="image">
                                </td>
                                <td>{{ $item->menu }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <form action="{{ route('menu.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('menu.edit',$item->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                {!! $menu->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection