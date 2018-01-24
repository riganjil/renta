@extends('layouts._main')
@section('title')
    Renta.com - Tentang Kami
@endsection
@section('body')
    <!-- Related Rented Row -->
    <h3 class="my-4">Products</h3>

    <div class="row">
        @forelse($data as $row)
            <div class="col-md-3 col-sm-6 mb-4 c-price">
                <a href="{{url('product/'. $row->nama_produk_seo)}}">
                    <img class="img-fluid" src="{{url('upload/product/'.$row->gambar)}}" alt="">
                    <div class="name">{{$row->nama_produk}}</div>
                    <div class="price">Rp 125.000</div>
                </a>
            </div>
        @empty
            <div class="col-md-12">
                <h3 class="text-center pb-3 pt-3">Produk tidak tersedia</h3>
            </div>
        @endforelse
    </div>
    <!-- /.row -->
@endsection