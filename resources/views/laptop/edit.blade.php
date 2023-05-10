@extends('template')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">Edit</a>
            <form class="d-flex">
                <a href="{{url('/')}}" class="btn btn-success" type="submit">Home</a>
            </form>
        </div>
    </nav>

    <form class="container" action="{{url("/edit-laptop/$laptop->id")}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$laptop->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="price" value="{{$laptop->price}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="file" id="Content" class="form-control" id="image">
        </div>
        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>
@endsection
