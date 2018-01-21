@extends('layouts._main')
@section('title')
    Renta.com - Aman dan nyaman
@endsection
@section('body')
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">
        <small>{{$data->nama_produk}}</small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-6">
            <img class="img-fluid" src="{{url('upload/product/'.$data->gambar)}}" alt="">
        </div>

        <div class="col-md-6">
            <h3 class="my-3">Product Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies,
                justo eu convallis placerat, felis enim.</p>
            <h3 class="my-3">Product Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->
@endsection