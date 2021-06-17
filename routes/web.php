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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trangchu', function () {
    return view('frontend.home');
});

Route::get('/vertu', function () {
    return view('frontend.vertu');
});

Route::get('/dongho', function () {
    return view('frontend.dongho');
});

Route::get('/phukien', function () {
    return view('frontend.phukien');
});

Route::get('/khampha', function () {
    return view('frontend.khampha');
});

Route::get('/dichvu', function () {
    return view('frontend.dichvu');
});

Route::get('/lienhe', function () {
    return view('frontend.lienhe');
});

//-----------------------------ADMIN ROUTE------------------------------------
//  CATEGORY ROUTE
Route::get('/add/category', [App\Http\Controllers\CategoryController::class, 'show_category_form'])->name('add_category_form');
Route::post('/add/category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('category_add');
Route::get('/category/manage', [App\Http\Controllers\CategoryController::class, 'manage_category'])->name('manage_category');
Route::get('/category/unpublish/{id}', [App\Http\Controllers\CategoryController::class, 'category_unpublish'])->name('category_unpublish');
Route::get('/category/publish/{id}', [App\Http\Controllers\CategoryController::class,'category_publish'])->name('category_publish');
Route::get('/category/category_delete/{id}', [App\Http\Controllers\CategoryController::class,'category_delete'])->name('category_delete');
Route::get('/category/category_edit/{id}', [App\Http\Controllers\CategoryController::class,'category_edit'])->name('category_edit');
Route::post('/category/category_update', [App\Http\Controllers\CategoryController::class,'category_update'])->name('category_update');

//  PRODUCT ROUTE
Route::get('/add/product', 'ProductController@show_product_form')->name('add_product_form');
Route::post('/add/product', 'ProductController@add_product')->name('product_add');
Route::get('/product/manage',[
    'uses' => 'ProductController@manage_product',
    'as' => 'manage_product'
]);
Route::get('/product/unpublish/{id}',[
    'uses' => 'ProductController@product_unpublish',
    'as' => 'unpublished_product'
]);
Route::get('/product/publish/{id}',[
    'uses' => 'ProductController@product_publish',
    'as' => 'published_product'
]);
Route::get('/product/product_edit/{id}',[
    'uses' => 'ProductController@product_edit',
    'as' => 'product_edit'
]);
Route::post('/product/product_update',[
    'uses' => 'ProductController@product_update',
    'as' => 'product_update'
]);
Route::get('/product/product_restore/{id}',[
    'uses' => 'ProductController@product_restore',
    'as' => 'product_restore'
]);
Route::get('/product/product_forceDelete/{id}',[
    'uses' => 'ProductController@product_forceDelete',
    'as' => 'product_forceDelete'
]);


//  ORDER ROUTE
Route::get('/product/details/{id}',[
    'uses' => 'FrontendController@product_details_by_id',
    'as'   =>'product_details'
]);
Route::get('/manage/order',[
    'uses' => 'OrderController@manage_order_info',
    'as'   =>'manage_order'
]);
Route::get('/order/details/{id}',[
    'uses' => 'OrderController@order_detail_by_order_id',
    'as'   =>'order_details'
]);
Route::get('/order/invoice/{id}',[
    'uses' => 'OrderController@order_invoice_view_by_order_id',
    'as'   =>'order_invoice'
]);

// Phiếu thanh toán được in
Route::get('/order/invoice/download/{id}',[
    'uses' => 'OrderController@order_invoice_download_by_order_id',
    'as'   =>'order_invoice_download'
]);