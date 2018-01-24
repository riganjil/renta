<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function aksi_login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect('auth/login');
        }
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function aksi_register(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'nama_depan' => 'required|max:20',
//            'nama_belakang' => 'required|max:20',
//            'username' => 'required|max:20',
//            'password' => 'required',
//            'password_konfirmasi' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            $error = $validator->errors()->all();
//
//            $err['status'] = 400;
//            $err['success'] = false;
//            $err['message'] = $error;
//
//            return response()->json($err, 200);
//        }
        if ($request->password != $request->password_konfirmasi) {
            $err['status'] = 400;
            $err['success'] = false;
            $err['message'] = 'Password dan password konfirmasi tidak sama';

            return response()->json($err, 200);
        }
        $simpan = new User;
        $simpan->nama_depan = $request->nama_depan;
        $simpan->nama_belakang = $request->nama_belakang;
        $simpan->username = $request->username;
        $simpan->email = $request->email;
        $simpan->password = Hash::make($request->password);
        $simpan->save();

        return view('pages.auth.register-complete');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
