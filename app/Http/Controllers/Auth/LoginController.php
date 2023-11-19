<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login(Request $request)
    {



        if ($request->isMethod('POST')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                Session::flash('success', 'đăng nhập thành công');
                return redirect()->route('index');
            } else {
                Session::flash('error', 'sai mật khẩu hoặc tài khoản');
                return redirect()->route('login');
            }
        }
        return view('user.login');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
