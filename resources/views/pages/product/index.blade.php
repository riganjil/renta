@extends('layouts._main')
@section('title')
    Renta.com - All Products
@endsection
@section('body')
    <!-- Related Rented Row -->
    <h3 class="my-4">Products</h3>

    <div class="row">
        @for($i=1; $i < 5; $i++)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                    <div class="price">Rp 125.000</div>
                </a>
            </div>
        @endfor
    </div>
    <!-- /.row -->

    <!-- Browse Rented Row -->
    <h3 class="my-4">Browse Rented</h3>

    <div class="row">
        @foreach($data as $row)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="{{url('product/'. $row->nama_produk_seo)}}">
                    <img class="img img-fluid" src="{{url('upload/product/'.$row->gambar)}}" alt="">
                    <div class="name">{{$row->nama_produk}}</div>
                    <div class="price">Rp 125.000 / jam</div>
                </a>
            </div>
        @endforeach
        @for($i=1; $i < 4; $i++)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="">
                    <img class="img img-fluid" src="http://placehold.it/500x300" alt="">
                    <div class="name">Handphone</div>
                    <div class="price">Rp 125.000 / jam</div>
                </a>
            </div>
        @endfor
    </div>
    <!-- /.row -->
@endsection