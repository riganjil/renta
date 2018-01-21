@extends('layouts._main')
@section('title')
    Renta.com - Tentang Kami
@endsection
@section('body')
    <!-- Related Rented Row -->
    <h3 class="my-4">Products</h3>

    <div class="row">
        @foreach($data as $row)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="{{url('product/'. $row->nama_produk_seo)}}">
                    <img class="img-fluid" src="{{url('upload/product/'.$row->gambar)}}" alt="">
                    <div class="name">{{$row->nama_produk}}</div>
                    <div class="price">Rp 125.000</div>
                </a>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
@endsection