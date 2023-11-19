<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //shop
    public function shop()
    {
        $cate = DB::table('category')
        ->get();
        $products = DB::table('products')
            ->whereNull('deleted_at')
            ->get();
            
        return view('products.shop', compact('products','cate'));
    }
   
    public function shop_category($id)
    {   
        $cate = DB::table('category')
        ->get();
        $products = DB::select('SELECT * FROM products WHERE category = :category', ['category' => $id]);
        return view('products.template_shop.nu',compact('products','cate'));
    }

    public function shop_nam()
    {
        return view('products.template_shop.nam');
    }

    // chi tiết sản phẩm
    public function detail_pro($id)
    {
        $product = DB::table('products')

            ->where('products.id', '=', $id)
            ->join('category', 'products.category', '=', 'category.id')
            ->select(
                'products.id',
                'products.name',
                'products.price',
                'products.title',
                'products.image',
                'products.description',
                'products.deal',
                'category.cate_name'
            )
            ->whereNull('deleted_at')
            ->first();

        $comment  = DB::table('comment')

            ->join('rate_star', 'comment.id_star', '=', 'rate_star.id')
            ->join('users', 'comment.id_user', '=', 'users.id')
            ->select('comment.comment', 'comment.id_user', 'comment.id_pro', 'rate_star.rate', 'users.name')
            ->where('comment.id_pro', '=', $id)
            ->get();
        // $rate_user  = DB::table('rate_star')
        //     ->where('id_pro', '=', $id)
        //     // ->whereNull('deleted_at')
        //     ->first();
        $avgStar = DB::table('rate_star')
            ->join('products', 'products.id', '=', 'rate_star.id_pro')
            ->select('rate_star.rate')
            ->where('rate_star.id_pro', '=', $id)
            ->avg('rate_star.rate');

        $images = DB::table('images')
            ->where('id_pro', '=', $id)
            ->get();
        $i = 0;
        $a = 0;
        return view('products.detail', compact('product', 'images', 'i', 'a', 'comment', 'avgStar'));
    }


    public function filter(Request $request)
    {
        if ($request->isMethod('POST')) {
            $products = DB::table('products')
                ->whereNull('deleted_at')
                ->where('name', 'like', '%' . $request->filter . '%')
                ->orWhere('title', 'like', '%' . $request->filter . '%')
                ->get();
            return view('products.shop', compact('products'));
        }
    }
}
