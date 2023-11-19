<?php

namespace App\Http\Controllers\Check;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;

        $user = DB::table('users')->where('id', '=', $user_id)->first();

        $tong = $request->tongtien;
        $goc = $request->giagoc;
        return view('check.checkout', compact('tong', 'goc', 'user'));
    }
    public function success(Request $request)
    {

        $cart = session('cart_data');
        $id = Auth::user();
        if ($request->isMethod('POST')) {

            $lastId =
                Db::table('bill')->insertGetId([
                    'id_user' => $id->id,
                    'status_order' => 0,
                    'name' => $id->name,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            foreach ($cart as $a) {

                Db::table('order')->insert([
                    'id_pro' => $a['id_pro'],
                    'quantity' => $a['quantity'],
                    'name_user' => $request->name,
                    'phone' => $request->number,

                    'id_bill' => $lastId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }

            return view('check.checkSuccess');
        }
    }
}
