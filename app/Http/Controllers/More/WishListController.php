<?php

namespace App\Http\Controllers\More;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WishListController extends Controller
{
    public function wishlist()
    {
        $user = Auth::user()->id;


        $data = DB::table('favorite')
            ->where('id_user', $user)
            ->join('products', 'products.id', '=', 'favorite.id_pro')
            ->select('products.image', 'products.name', 'products.deal', 'products.id as id_pro', 'favorite.id', 'products.title')
            ->get();

        return view('more_option.wishlist', compact('data'));
    }
    public function add($id)
    {
        $idSp = $id;
        $idUser = Auth::user()->id;

        $check = DB::table('favorite')
            ->where('id_pro', '=', $idSp)
            ->first();

        if (isset($check) == true) {
            Session::flash('success', 'Sản phẩm đã có trong danh sách yêu thích rồi');
        } else {
            DB::table('favorite')->insert([
                'id_user' => $idUser,
                'id_pro' => $idSp,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            Session::flash('success', 'Đã thêm sản phẩm vào danh sách yêu thích');
        }
        return redirect()->route('shop', ['id' => $idSp]);
    }
    public function delete($id)
    {
        $a = Favorite::where('id', '=', $id)->delete();
        return redirect()->route('wishlist');
    }
}
