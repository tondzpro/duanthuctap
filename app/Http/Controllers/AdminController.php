<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\bill;
use App\Models\images;
use App\Models\order;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('admin.index');
    }
    public function list()
    {
        $products = DB::table('products')
            ->whereNull('deleted_at') //không hiển thị sản phẩm ở trong cột deleted_at
            ->get();
        return view('admin.product.list', compact('products'));
    }

    public function addPro(AdminRequest $request)
    {
        $cate = DB::table('category')
            // ->whereNull('deleted_at') //không hiển thị sản phẩm ở trong cột deleted_at
            ->get();
        if ($request->isMethod('POST')) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = $request->image;
                $image = uploadFile('hinh', $request->file('image'));
                $name = $request->name;

                $lastId = DB::table('products')->insertGetId([
                    'name' => $request->name,
                    'price' => $request->price,
                    'deal' => $request->deal,
                    'category' => $request->category,
                    'title' => $request->title,
                    'image' => $image,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            if (isset($request->images)) {
                $images = $request->images;

                foreach ($images as $images) {
                    $images = uploadFile('hinh', $images);
                    DB::table('images')->insert(
                        [
                            'id_pro' => $lastId,
                            'image' => $images
                        ]
                    );
                }
            }
        }

        // if ($request->isMethod('POST')) { //tồn tại phương thức post/
        //     //nếu như tồn tại file thì sẽ up file lên
        //     $params =  $request->except('_token');
        //     if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //         $params['image'] = uploadFile('hinh', $request->file('image'));
        //     }

        //     $products = products::create($params);
        //     if ($products->id) {
        //         Session::flash('success', 'thêm mới thành công sản phẩm');
        //         return redirect()->route('Admin_add_pro');
        //     }
        // }
        return view('admin.product.add', compact('cate'));
    }

    // public function editView($id)
    // {
    //     $product = DB::table('products')
    //         ->where('id', '=', $id)
    //         ->first();

    //     return view('admin.product.edit', compact('product'));
    // }

    public function editPro(AdminRequest $request, $id)
    {
        $product = DB::table('products')
            ->where('id', '=', $id)
            ->first();
        $cate = DB::table('category')
            // ->whereNull('deleted_at') //không hiển thị sản phẩm ở trong cột deleted_at
            ->get();
        $products = products::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()) {

                $resultDL = Storage::delete('/public/' . $products->image);
                if ($resultDL) {
                    $params['image'] = uploadFile('hinh', $request->file('image'));
                } else {
                    $params['image'] = $products->image;
                }
            }



            $result = products::where('id', $id)
                ->update($params);
            if ($result) {
                Session::flash('success', 'sửa  thành công sản phẩm');
                return redirect()->route('Admin_edit_pro', ['id' => $id]);
            }
        }
        return view('admin.product.edit', compact('product', 'cate'));
    }
    public function delete($id)
    {
        products::where('id', $id)->delete();
        Session::flash('success', 'xóa thành công sản phẩm ');
        return redirect()->route('list');
    }
    public function show(Request $request)
    {
        $bill = DB::table('bill')
            ->where('bill.status_order', '=', 0)
            ->get();
        $databill  = DB::table('bill')
            ->join('order', 'bill.id', '=', 'order.id_bill')
            ->where('bill.status_order', '=', 0)
            ->select('bill.id', 'bill.id_user', 'order.phone', 'order.name_user')
            ->get();


        return view('admin.order.new_order', compact('bill', 'databill'));
    }

    public function accept_order($id)

    {
        DB::table('bill')
            ->update([
                'status_order' => 1
            ]);
        Session::flash('success', 'đã xác nhận đơn hàng');
        return redirect()->route('show_new_order');
    }
    public function delete_order($id)
    {
        bill::where('id', $id)->delete();
        order::where('id_bill', $id)->delete();
        Session::flash('success', 'đã Hủy đơn hàng');
        return redirect()->route('show_new_order');
    }
}
