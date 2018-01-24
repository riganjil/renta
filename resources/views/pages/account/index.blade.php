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
        @include('partials.account._sidebar')
        <div class="col-md-9">
            <ul class="nav nav-tabs mb-4" id="proTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#t_pro" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t_pass" role="tab" aria-controls="profile" aria-selected="false">Ganti Password</a>
                </li>
            </ul>
            <div class="tab-content" id="proTabContent">
                <div class="tab-pane fade show active" id="t_pro" role="tabpanel" aria-labelledby="home-tab">
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
                <div class="tab-pane fade" id="t_pass" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{url('account/change-pass')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group has-success">
                            <label class="form-control-label" for="">Password Lama</label>
                            <input type="password" name="password" class="form-control form-control-success">
                        </div>

                        <div class="form-group has-success">
                            <label class="form-control-label" for="">Password Baru</label>
                            <input type="password" name="password_baru" class="form-control form-control-success">
                        </div>

                        <div class="form-group has-success">
                            <label class="form-control-label" for="">Konfirmasi Password Baru</label>
                            <input type="password" name="password_baru_konfirmasi" class="form-control form-control-success">
                        </div>

                        <div class="form-group has-success">
                            <button class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection