@extends('layouts._main')
@section('title')
    Renta.com - Tentang Kami
@endsection
@section('body')
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Tentang Kami</h1>

    <!-- Related Rented Row -->
    <h3 class="my-4">Recently Rented</h3>

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
@endsection