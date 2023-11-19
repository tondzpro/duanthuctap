<?php

namespace App\Http\Controllers\More;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function cart(Request $request)
    {

        return view('products.cart');
    }

    public function add(Request $request, $id)
    {

        $pro = DB::table('products')->where('id', $id)->first();

        $quantity = 1;
        // $data = Session::get('cart_data', []);

        $data = session()->get('cart_data', []);

        if (isset($data[$id])) {
            $data[$id]["quantity"] += 1;
        } else {
            $data[$id] = [
                'id_pro' => $id,
                'name' => $pro->name,
                'image' => $pro->image,
                'price' => $pro->price,
                'quantity' => $quantity,
            ];
        }



        session(['cart_data' => $data]);
        // $request->session()->forget('cart_data');
        return redirect()->route('cart');
    }
}
