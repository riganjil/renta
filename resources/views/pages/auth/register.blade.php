@extends('layouts._auth')
@section('title')
    Renta.com - Register
@endsection
@section('body')
    <!-- Related Rented Row -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="my-4">Register</h3>
            <hr>
            <form action="{{url('auth/register')}}" id="f-login" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="password_konfirmasi" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Daftar</button>
                    <small>Sudah punya akun ? <a href="{{url('auth/login')}}">Login disini</a></small>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection