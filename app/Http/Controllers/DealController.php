<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DealController extends Controller
{
    public function add(Request $request)
    {
        $co = 0;
        if ($request->isMethod('POST')) {
            DB::table('deal')->insert(
                [
                    'title' => $request->title,
                    'code' => $request->code,
                    'deal_value' => $request->deal_value,
                    'time_start' => $request->time_start,
                    'time_end' => $request->time_end,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]

            );
            Session::flash('success', 'tạo thành công mã giảm giá mới');
        }
        return view('admin.deal.add', compact('co'));
    }
    public function edit()
    {
        return view('admin.deal.add');
    }
    public function delete()
    {
        return view('admin.deal.add');
    }
    public function apply(Request $request)
    {
        $code = DB::table('deal')->where('code', '=', $request->code)->first();
        // dd($code);
        if ($request->isMethod('POST')) {
            if ($request->code != '') {

                if (isset($code)) {
                    $tong = 0;
                    $data = session()->get('cart_data', []);
                    foreach ($data as $t) {
                        $tong += $t['price'] * $t['quantity'];
                    }

                    $percent = $tong * ($code->deal_value / 100);
                    $tong -= $percent;

                    Session::flash('success', 'áp mã thành công');
                    return view('products.cart', compact('tong', 'code'));
                } else if ($code == NULL) {

                    $data = session()->get('cart_data', []);

                    $total = 0;
                    foreach ($data as $t) {
                        $total += $t['price'];
                    }
                    return view('products.cart', compact('total'));
                }
            } else {
                Session::flash('error', 'không có mã giảm giá nào được chọn');
                return view('products.cart');
            }
        }
    }
}
