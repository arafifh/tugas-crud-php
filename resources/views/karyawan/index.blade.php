@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row mt-1">
            <div class="col-lg">
                <ol class="breadcrumb" style="background-color: white">
                    <li class="breadcrumb-item">
                        <a href="">Home /</a>
                    </li>
                    <li class="breadcrumb-item-active" aria-current="page">
                        <p class="pl-1">Table Karyawan</p> 
                    </li>
                </ol>
            </div>
            <div class="col-lg">
                <div class="d-flex flex-row-reverse mt-3">
                <div class="p-2 m-2 bg-success" style="border-radius: 6px;"><a href="{{ url('karyawan/create') }}" style="color: black;">Insert New Data </a><i class="fa-solid fa-plus"></i></div>
                <div class="p-2 m-2 bg-warning" style="border-radius: 6px;"><a href="" style="color: black;">Graphic</a>  <i class="fa-solid fa-chart-simple"></i></div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <!-- <th class="text-center">#</th> -->
                <th>Name</th>
                <th>Job Position</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Since</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->job_position }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->join_date }}</td>
                    <td>
                        <form action="{{ url('karyawan/delete', [$value->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a href="{{ url('karyawan/edit', [$value->id]) }}" class="btn btn-xs btn-primary">edit</a>
                    </td>
                    
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
