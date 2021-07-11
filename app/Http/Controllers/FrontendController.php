<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MultipleImage;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $smartProducts = Product::where('category_id', 1)->get();
        $livingProducts = Product::where('category_id', 2)->get();
        $category = Category::get();
        return view('frontend/home',[
            'smartProducts' => $smartProducts,
            'livingProducts' => $livingProducts,
            'category' => $category
            ])->with(compact('smartProducts','livingProducts', 'category'));
    }
    function product_details_by_id($product_id)
    {
        $product =  Product::find($product_id);
        // $slider_images =  MultipleImage::where('product_id',$product->id)->get();
        $relatedProducts =  Product::where('category_id', $product->category_id)
            ->where('id', '!=' ,$product->id)
            ->orderBy('id','DESC')
            ->get();
        return view('frontend/product_details', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            // 'slider_images' => $slider_images
        ]);
    }
    public function shop_product_view(){
        $products =  Product::where('status',1)->paginate(10);
        // $categories = Category::where('status',1)->get();
        return view('frontend/shop_page',['products'=>$products])->with(compact('products'));
    }
    public function show_product_by_cate($category_id){
        // $categories = Category::where('status',1)->get();
        $productsByCate =  Product::where('category_id',$category_id)->orderBy('id','DESC')->paginate(10);
        return view('frontend/shop_page',['products'=>$productsByCate]);
    }
    public function getProductOfCategory($id) {
        $products = Product::where('category_id', $id)->paginate(3);
        $category = Category::find($id);
        return view('frontend/danhmuc', [
            'products' => $products,
            'category' => $category
        ]);
    }
}
