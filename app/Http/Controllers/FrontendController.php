<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MultipleImage;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $smartProducts = Product::where('category_id', 1)->paginate(12);
        $livingProducts = Product::where('category_id', 2)->paginate(12);
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
        $relatedProducts =  Product::where('category_id', $product->category_id)
            ->where('id', '!=' ,$product->id)
            ->orderBy('id','DESC')
            ->get();
        return view('frontend/product_details', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function shop_product_view(){
        $products =  Product::where('status',1)->paginate(12);
        return view('frontend/shop_page',['products'=>$products])->with(compact('products'));
    }

    public function show_product_by_cate($category_id){
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
