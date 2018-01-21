@extends('layouts._main')
@section('title')
    Renta.com - Aman dan nyaman
@endsection
@section('body')
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Rentalkan disini
        <small>aman dan nyaman</small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque
                urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies,
                justo eu convallis placerat, felis enim.</p>
            <h3 class="my-3">Project Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Recently Rented Row -->
    <div class="row">
        <h3 class="t-product">Recently Rented</h3>
    </div>
    <div class="row">
        @for($i=1; $i < 5; $i++)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                    <div class="name">Yamaha Mio 2011</div>
                    <div class="price">Rp 125.000</div>
                </a>
            </div>
        @endfor
    </div>
    <!-- /.row -->

    <!-- Browse Rented Row -->
    <div class="row">
        <h3 class="t-product">Browse Rented</h3>
    </div>
    <div class="row">
        @for($i=1; $i < 5; $i++)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                    <div class="name">Yamaha Mio 2011</div>
                    <div class="price">Rp 125.000 / jam</div>
                </a>
            </div>
        @endfor
        @foreach($product as $row)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="{{url('product/'. $row->nama_produk_seo)}}">
                    <img class="img img-fluid" src="{{url('upload/product/'.$row->gambar)}}" alt="">
                    <div class="name">{{$row->nama_produk}}</div>
                    <div class="price">Rp 125.000 / jam</div>
                </a>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
@endsection