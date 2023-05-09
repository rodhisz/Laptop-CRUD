@extends('template')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <h2>Crud</h2>
            </a>
            <form class="d-flex">
                <a href="" class="btn btn-success" type="submit">Create</a>
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

            <tr class="text-center" style="vertical-align: 10px">
                <th>1</th>
                <td>ROG</td>
                <td>Rp. 10.000.000</td>
                <td>
                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/22/8632b7db-fb78-4116-b431-2c4935d1768f.jpg"
                        style="max-width: 100px !important" alt="">
                </td>
                <td>
                    <form class="container" action="" enctype="multipart/form-data">
                        <a href="" class="btn btn-warning" type="submit">Edit</a>
                        <button type="submit" href="" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        </table>
    </div>
@endsection
