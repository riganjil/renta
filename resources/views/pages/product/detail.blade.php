@extends('layouts._main')
@section('title')
    Renta.com - Product Detail
@endsection
@section('body')
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">
        <small>{{$data->nama_produk}}</small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{url('upload/product/'.$data->gambar)}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('upload/product/'.$data->gambar)}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('upload/product/'.$data->gambar)}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="my-3">Product Description</h3>
            <p>{{$data->deskripsi}}</p>
            <h3 class="my-3">Product Details</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('product/'.$data->nama_produk_seo.'/sewa')}}" class="btn btn-primary mt-4 mb-4">Sewa</a>
        </div>
    </div>
    <!-- /.row -->
@endsection