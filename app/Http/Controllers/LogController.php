<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function logout()
    {
    }

    public function register()
    {
        return view('user.register');
    }
}
