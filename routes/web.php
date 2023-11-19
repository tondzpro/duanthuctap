<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Check\CheckoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\More\AboutController;
use App\Http\Controllers\More\CartController;
use App\Http\Controllers\More\CompareController;
use App\Http\Controllers\More\ContactController;
use App\Http\Controllers\More\WishListController;
use App\Http\Controllers\MoreOption;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::match(['GET', 'POST'], '/user/login', [LoginController::class, 'login'])->name('login');
Route::get('/user/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/user/register', [LoginController::class, 'register'])->name('register');

Route::get('/products/shop-category/{id}', [ProductController::class, 'shop_category'])->name('shop-category');
Route::get('/products/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/products/detail/{id}', [ProductController::class, 'detail_pro'])->name('detail');

Route::middleware(['auth', 'check.role'])->group(
    function () {
        Route::get('/more/compare', [CompareController::class, 'compare'])->name('compare');
        Route::get('/more/about', [AboutController::class, 'about'])->name('about');
        Route::get('/more/wishlist', [WishListController::class, 'wishlist'])->name('wishlist');
        Route::get('/more/contact', [ContactController::class, 'contact'])->name('contact');
        Route::get('/more/cart', [CartController::class, 'cart'])->name('cart');

        //check 
        Route::match(['GET', 'POST'], '/checkout', [CheckoutController::class, 'create'])->name('checkout');
        Route::match(['GET', 'POST'], '/checkout/success', [CheckoutController::class, 'success'])->name('order_success');



        //deal
        Route::match(['GET', 'POST'], '/deal/apply', [DealController::class, 'apply'])->name('deal_apply');

        //WishListController
        Route::match(['GET', 'POST'], '/More/wishlist/add/{id}', [WishListController::class, 'add'])->name('WishList_add');
        Route::get('/More/wishlist/delete/{id}', [WishListController::class, 'delete'])->name('WishList_delete');

        //cart controller
        Route::match(['GET', 'POST'], '/More/Cart/add/{id}', [CartController::class, 'add'])->name('Cart_add');


        //comment
        Route::match(['GET', 'POST'], '/user/comment/{id}', [CommentController::class, 'add'])->name('comment');


        Route::get('/admin-pro', [AdminController::class, 'admin'])->name('Admin_index');
        Route::match(['GET', 'POST'], '/admin-pro/add', [AdminController::class, 'addPro'])->name('Admin_add_pro');
        Route::match(['GET', 'POST'], '/admin-pro/edit/{id}', [AdminController::class, 'editPro'])->name('Admin_edit_pro');
        Route::get('/admin-pro/list', [AdminController::class, 'list'])->name('list');
        Route::get('/admin-pro/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('Admin_delete_pro');

        //category admin
        Route::match(['GET', 'POST'], '/admin/category-add', [CategoryController::class, 'add'])->name('add_cate');
        Route::get('/admin/category/list', [CategoryController::class, 'list'])->name('list_cate');

        Route::match(['GET', 'POST'], '/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('edit_cate');
        Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('delete_cate');
        //admin order
        Route::match(['GET', 'POST'], '/admin/new_order', [AdminController::class, 'show'])->name('show_new_order');
        Route::get('/admin-order/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_order'])->name('Admin_delete_order');
        Route::get('/admin-order/accept/{id}', [App\Http\Controllers\AdminController::class, 'accept_order'])->name('Admin_accept_order');

        //deal admin
        Route::match(['GET', 'POST'], '/admin-deal/add', [DealController::class, 'add'])->name('Admin_add_deal');

        //filter
        Route::match(['GET', 'POST'], '/shop/filter', [ProductController::class, 'filter'])->name('shop_filter');
    }
);

//không cần $ chỉ cần {id} 








// Route::get('/product', [App\Http\Controllers\StudentController::class, 'index']);
