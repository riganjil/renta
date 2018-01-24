@extends('layouts._auth')
@section('title')
    Renta.com - Register
@endsection
@section('body')
    <!-- Related Rented Row -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="my-4">Login</h3>
            <hr>
            <form action="{{url('auth/register')}}" id="f-login" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Login</button>
                    <small><a href="{{url('auth/register')}}">Daftar disini</a></small>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection