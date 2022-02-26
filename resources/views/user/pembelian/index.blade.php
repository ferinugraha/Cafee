@extends('layouts.user')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pembelian.create') }}"> Create</a>
            </div>
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Nama Pegawai</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($transaksi as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->nama_pelanggan }}</td>
            <td>{{ $item->menu }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>Rp {{ number_format($item->total_harga,0,',','.') }}</td>
            <td>{{ $item->nama_pegawai }}</td>
            <td>
                <form action="{{ route('transaksi.destroy',$item->id) }}" method="POST">     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $transaksi->links() !!}
    
@endsection