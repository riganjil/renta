@extends('layouts._main')
@section('title')
    Renta.com - Account
@endsection
@section('body')
    <!-- Related Rented Row -->

    <div class="row">
        <div class="col-md-12">
            <h3 class="my-4">Akun Saya</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column" id="nav_side">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Ubah profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Poin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keranjang</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <form action="">
                <div class="form-group has-success">
                    <label class="form-control-label" for="">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-success" value="{{Auth::User()->nama_depan.' '.Auth::User()->nama_belakang}}" readonly>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="">Telepon</label>
                    <input type="text" class="form-control form-control-success" value="{{Auth::User()->telepon}}"  readonly>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="">Email</label>
                    <input type="text" class="form-control form-control-success" value="{{Auth::User()->email}}"  readonly>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="">Username</label>
                    <input type="text" class="form-control form-control-success" value="{{Auth::User()->username}}"  readonly>
                </div>
                <div class="form-group has-success">
                    <button class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection