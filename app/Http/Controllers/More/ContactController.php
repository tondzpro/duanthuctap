<?php

namespace App\Http\Controllers\More;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('more_option.contact');
    }
}
