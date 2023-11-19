<?php

namespace App\Http\Controllers\More;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function compare()
    {
        return view('more_option.compare');
    }
}
