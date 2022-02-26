{{-- @extends('layouts.admin')
@section('content')

<div class="page-wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('userList.create') }}"> Create</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th width="160px">Action</th>
        </tr>
        @foreach ($user as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->role }}</td>
            <td>
                <form action="{{ route('register.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('userList.edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $user->links() !!} --}}
        


@extends('layouts.admin')

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
                    <li class="breadcrumb-item active" aria-current="page">Data Akun</li>
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
                            <a class="btn btn-success" href="{{ route('register.create') }}"> Create</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Role</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <br>
                            
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <form action="{{ route('register.destroy',$item->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('register.edit',$item->id) }}">Edit</a>
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
                    {!! $user->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection