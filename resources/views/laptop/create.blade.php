@extends('template')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">Create</a>
            <form class="d-flex">
                <a href="{{url('/')}}" class="btn btn-success" type="submit">Home</a>
            </form>
        </div>
    </nav>

    <form class="container" action="{{url('/add-laptop')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="images[]" type="file" id="Content" class="form-control" id="image" multiple>
        </div>
        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>
@endsection
