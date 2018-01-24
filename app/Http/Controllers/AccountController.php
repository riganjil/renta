<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;
use Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.index');
    }

    public function change_pass(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'password' => 'required|min:8|max:16',
//            'password_baru' => 'required|min:8|max:16',
//            'password_baru_konfirmasi' => 'required|min:8|max:16',
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
        if ($request->password_baru != $request->password_baru_konfirmasi) {
            $err['status'] = 400;
            $err['success'] = false;
            $err['message'] = 'Password baru dan password baru konfirmasi tidak sama';

            return response()->json($err, 200);
        }

        $update = User::where('kode_user', Auth::User()->kode_user)
            ->update([
               'password' => Hash::make($request->password_baru)
            ]);

        return redirect('account');
    }
}
