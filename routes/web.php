<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//-----------------------------FRONTEND ROUTE------------------------------------

Auth::routes();


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/danhmuc/{id}', [App\Http\Controllers\FrontendController::class, 'getProductOfCategory'])->name('get_list_product_of_category');

Route::get('/khampha', function () {
    return view('frontend.khampha');
});

Route::get('/dichvu', function () {
    return view('frontend.dichvu');
});

Route::get('/lienhe', function () {
    return view('frontend.lienhe');
});

Route::get('/khampha/kienthuc', function () {
    return view('frontend.kienthuc');
});

Route::get('/khampha/kienthuc1', function () {
    return view('frontend.kienthuc1');
});

Route::get('/khampha/kienthuc2', function () {
    return view('frontend.kienthuc2');
});

Route::get('/khampha/kienthuc3', function () {
    return view('frontend.kienthuc3');
});

Route::get('/khampha/kienthuc4', function () {
    return view('frontend.kienthuc4');
});

Route::get('/khampha/tintuc', function () {
    return view('frontend.tintuc');
});

Route::get('/dichvusuachua', function () {
    return view('frontend.dichvusuachua');
});

Route::get('/baohanhsanpham', function () {
    return view('frontend.baohanhsanpham');
});

Route::get('/mualaidienthoai', function () {
    return view('frontend.mualaidienthoai');
});
Route::get('/khampha/tintuc1', function () {
    return view('frontend.tintuc1');
});

Route::get('/khampha/tintuc2', function () {
    return view('frontend.tintuc2');
});

Route::get('/khampha/tintuc3', function () {
    return view('frontend.tintuc3');
});

Route::get('/khampha/tintuc4', function () {
    return view('frontend.tintuc4');
});

Route::get('/giohang', function () {
    return view('frontend.giohang');
});

Route::get('/thanhtoan', function () {
    return view('frontend.thanhtoan');
});

Route::get('/baomatthongtin', function () {
    return view('frontend.baomatthongtin');
});

Route::get('/chinhsachvanchuyen', function () {
    return view('frontend.chinhsachvanchuyen');
});

Route::get('/chinhsachdoitra', function () {
    return view('frontend.chinhsachdoitra');
});

Route::get('/dichvubaohanh', function () {
    return view('frontend.dichvubaohanh');
});

Route::get('/cachthucthanhtoan', function () {
    return view('frontend.cachthucthanhtoan');
});
Route::get('/product/details/{id}',[App\Http\Controllers\FrontendController::class, 'product_details_by_id'])->name('product_details');

//-----------------------------ADMIN ROUTE------------------------------------

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  CATEGORY ROUTE
Route::prefix('category')->group(function () {
    Route::get('/add', [App\Http\Controllers\CategoryController::class, 'show_category_form'])->name('add_category_form');
    Route::post('/add', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('category_add');
    Route::get('/manage', [App\Http\Controllers\CategoryController::class, 'manage_category'])->name('manage_category');
    Route::get('/unpublish/{id}', [App\Http\Controllers\CategoryController::class, 'category_unpublish'])->name('category_unpublish');
    Route::get('/publish/{id}', [App\Http\Controllers\CategoryController::class,'category_publish'])->name('category_publish');
    Route::get('/category_delete/{id}', [App\Http\Controllers\CategoryController::class,'category_delete'])->name('category_delete');
    Route::get('/category_edit/{id}', [App\Http\Controllers\CategoryController::class,'category_edit'])->name('category_edit');
    Route::post('/category_update', [App\Http\Controllers\CategoryController::class,'category_update'])->name('category_update');
});

//  PRODUCT ROUTE
Route::prefix('product')->group(function () {
    Route::get('/add', [App\Http\Controllers\ProductController::class, 'show_product_form'])->name('add_product_form');
    Route::post('/add', [App\Http\Controllers\ProductController::class, 'add_product'])->name('product_add');
    Route::get('/manage', [App\Http\Controllers\ProductController::class, 'manage_product'])->name('manage_product');
    Route::get('/unpublish/{id}', [App\Http\Controllers\ProductController::class, 'product_unpublish'])->name('unpublished_product');
    Route::get('/publish/{id}', [App\Http\Controllers\ProductController::class,'product_publish'])->name('published_product');
    Route::get('/product_edit/{id}', [App\Http\Controllers\ProductController::class,'product_edit'])->name('product_edit');
    Route::post('/product_update', [App\Http\Controllers\ProductController::class,'product_update'])->name('product_update');
    Route::get('/product_restore/{id}', [App\Http\Controllers\ProductController::class,'product_restore'])->name('product_restore');
    Route::get('/product_delete/{id}', [App\Http\Controllers\ProductController::class,'product_delete'])->name('product_delete');
    Route::get('/product_forceDelete/{id}', [App\Http\Controllers\ProductController::class,'product_forceDelete'])->name('product_forceDelete');
});

// CART ROUTE
Route::prefix('cart')->group(function () {
    Route::get('/add', [App\Http\Controllers\CartController::class, 'list_cart'])->name('list_cart');
    Route::post('/add', [App\Http\Controllers\CartController::class, 'product_add_to_cart'])->name('add_to_cart');
    Route::get('/remove/{id}', [App\Http\Controllers\CartController::class, 'cart_remove_item_pro_id'])->name('cart_remove_item');
    Route::post('/update', [App\Http\Controllers\CartController::class, 'cart_update_item_pro_id'])->name('cart_update');
});

// CHECKOUT ROUTE
Route::prefix('checkout')->group(function () {
    Route::get('/form', [App\Http\Controllers\CheckoutController::class, 'checkout_form_view'])->name('checkout_form');
    Route::get('/shipping', [App\Http\Controllers\CheckoutController::class, 'checkout_shipping_form'])->name('shipping_form');
    Route::post('/shipping', [App\Http\Controllers\CheckoutController::class, 'save_shipping_info'])->name('save_shipping');
    Route::get('/payment', [App\Http\Controllers\CheckoutController::class, 'checkout_payment_form'])->name('checkout_payment');
    Route::post('/order', [App\Http\Controllers\CheckoutController::class, 'save_order_info'])->name('save_order');
});

// Customer Route
Route::prefix('customer')->group(function () {
    Route::post('login', [App\Http\Controllers\CheckoutController::class, 'loging_customer'])->name('customer_login');
    Route::post('signup', [App\Http\Controllers\CheckoutController::class, 'customer_signup'])->name('customer_signup');
    Route::get('logout', [App\Http\Controllers\CheckoutController::class, 'logout_customer'])->name('logout_submit');
});

//  ORDER ROUTE
Route::prefix('order')->group(function () {
    Route::get('/manage', [App\Http\Controllers\OrderController::class, 'manage_order_info'])->name('manage_order');
    Route::get('/details/{id}', [App\Http\Controllers\OrderController::class, 'order_detail_by_order_id'])->name('order_details');
    Route::get('/invoice/{id}', [App\Http\Controllers\OrderController::class, 'order_invoice_view_by_order_id'])->name('order_invoice');
    Route::get('/invoice/download/{id}', [App\Http\Controllers\OrderController::class, 'order_invoice_download_by_order_id'])->name('order_invoice_download');
});
