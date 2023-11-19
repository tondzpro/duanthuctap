<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function add(Request $request)
    {


        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $cate = Category::create($params);
            if ($cate->id) {
                Session::flash('success', 'thêm mới thành công Loại sản phẩm');
                return redirect()->route('add_cate');
            }
        }
        return view('admin.category.add');
    }
    public function list()
    {
        $cate = DB::table('category')
            ->get();
        return view('admin.category.list', compact('cate'));
    }



    public function edit(Request $request, $id)
    {
        $cate = DB::table('category')
            ->where('id', '=', $id)
            ->first();
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $result = Category::where('id', $id)
                ->update($params);
            if ($result) {
                Session::flash('success', 'Cập nhật thành công Loại sản phẩm');
                return redirect()->route('list_cate');
            }
        }
        return view('admin.category.edit', compact('cate'));
    }
    public function delete($id)
    {
        Category::where('id', $id)->delete();
        Session::flash('success', 'xóa thành công Loại sản phẩm');
        return redirect()->route('list_cate');
    }
}
