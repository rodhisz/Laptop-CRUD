@extends('template')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <h2>Crud</h2>
            </a>
            <form class="d-flex">
                <a href="{{ url('/add') }}" class="btn btn-success" type="submit">Create</a>
            </form>
        </div>
    </nav>

    <div class="container" style="margin-top: 50px">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($laptop as $l)
                <tr class="text-center" style="vertical-align: 10px">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $l->name }}</td>
                    <td>Rp. {{ number_format($l->price) }}</td>
                    <td>
                        <img src="{{ url('storage/' . $l->image) }}" style="max-width: 100px !important" alt="">
                    </td>
                    <td>
                        <form class="container" action="{{url("delete-laptop/$l->id")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <a href="{{ url("/edit/$l->id") }}" class="btn btn-warning">edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
