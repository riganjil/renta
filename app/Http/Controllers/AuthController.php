<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

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

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
