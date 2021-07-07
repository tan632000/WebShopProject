<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }
    
    public function show_product_form()
    {
        $categories =  DB::table('categories')->get();
        return view('dashboard.product.product_form',['categories'=>$categories]);
    }

    public function add_product(Request $request){
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'price'=>'required|integer',
            'status'=>'required',
            'image' => 'required',
            'quantity' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $fileName = $this->getPathImage($request);
        }
        $data = $this->handleData($request);
        $data['image'] = $fileName;
        $this->model->create($data);
        return back()->with('product_add_msg',' Product Added Succesfully');
    }
    public function manage_product(){
        $products =  Product::paginate(5,['*'], 'products');
        $softDeleteProducts = Product::onlyTrashed()->paginate(5,['*'],'softDeleteProducts');
        return view('dashboard/product/manage_product', [
            'products'=> $products,
            'softDeleteProducts'=>$softDeleteProducts
            ])->with(compact('products','softDeleteProducts'));
    }
    public function product_publish($id){
        DB::table('products')->where(['id'=>$id])->update(['status'=>1]);
        return back()->with('published_msg','Product Published Successfully');
    }
    public function product_unpublish($id){
        DB::table('products')->where(['id'=>$id])->update(['status'=>0]);
        return back()->with('unpublished_msg','Product Unpublished Successfully');
    }
    public function product_delete($id){
        Product::find($id)->delete();
        return back()->with('published_msg','Product soft delete Successfully');
    }
    public function product_edit($id){
        $product = Product::find($id);
        $curCategory = Category::where('id', $product->category_id)->first();
        $categories = Category::where('id', '!=', $product->category_id)->get();
        return view('dashboard/product/product_edit_form', [
            'product'=>$product,
            'categories'=>$categories,
            'curCategory' => $curCategory
        ]);
    }
    public function product_update(Request $request){
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'price'=>'required|integer',
            'status'=>'required',
            'quantity' => 'required'
        ]);
        $product = Product::find($request->id);
        $data = $this->handleData($request);
        if ($request->hasFile('image')) {
            $fileName = $this->getPathImage($request);
            unlink(public_path('/uploads/product_images/' . $product->image));
            $data['image'] = $fileName;
            $product->update($data);
        } else {
            $product->update($data);
        }
        return back()->with('product_add_msg', 'Product Update Successfully');
    }
    public function product_restore($id){
        Product::withTrashed()->where('id',$id)->restore();
        return back()->with('published_msg','Product restore Successfully');
    }
    public function product_forceDelete($id){
        $product = Product::onlyTrashed()->find($id);
        if ($product->image == 'default_img.jpg') {
            Product::onlyTrashed()->find($id)->forceDelete();
            return back()->with('unpublished_msg','Product Permanent Delete Successfully');
        }else {
            unlink(base_path('public/uploads/images/'.$product->image));
            Product::onlyTrashed()->find($id)->forceDelete();
            return back()->with('unpublished_msg','Product Permanent Delete Successfully');
        }
        // Product::onlyTrashed()->where('id',$id)->forceDelete();
        // return back()->with('published_msg','Product Permanent Delete Successfully');
    }

    protected function getPathImage($request) {
        $filename = $request->category_id . rand(1, 1000) . '.' . str_replace(' ', '-', $request->file('image')->getClientOriginalName());
        $path = public_path('/uploads/product_images/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        Image::make($request->image)->save($path.$filename, 1);
        return $filename;
    }

    protected function handleData($product) {
        $data = [
            'name' => $product->name,
            'category_id' => $product->category_id,
            'short_description' => $product->short_description,
            'long_description' => $product->long_description,
            'price' => $product->price,
            'status' => $product->status,
            'quantity' => $product->quantity
        ];
        return $data;
    }
}
