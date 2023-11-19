<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function show()
    {
    }

    public function add(Request $request)
    {
        $id_pr = $request->id;
        $id_user =  Auth::user()->id;
        if ($request->isMethod('POST')) {


            $lastID = DB::table('rate_star')->insertGetId([
                'id_user' => $id_user,
                'id_pro' => $id_pr,
                'rate' => $request->rate
            ]);
            DB::table('comment')->insert([
                'comment' => $request->comment,
                'id_user' => $id_user,
                'id_pro' => $id_pr,
                'id_star' => $lastID
            ]);




            return redirect()->route('detail', ['id' => $id_pr]);
        }
    }
}
