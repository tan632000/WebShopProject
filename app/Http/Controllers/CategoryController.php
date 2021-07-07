<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show_category_form(){
        return view('dashboard/category/category_form');
    }
    public function add_category(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'status' => 'required'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        $category->save();
        return redirect('/category/add')->with('message_add_cat','Category Added Successfully');
    }
    public function manage_category(){
        $categories =  Category::paginate(10);
        return view('dashboard/category/manage_category',['categories'=> $categories]);
    }
    public function category_unpublish($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
        return back()->with('publish_message','Category Unpublished Successfully');
    }
    public function category_publish($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();
        return back()->with('publish_message','Category Published Successfully');
    }
    public function category_delete($id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('publish_message','Category Deleted Successfully');
    }
    public function category_edit($id){
        $category = Category::find($id);
        return view('dashboard/category/category_edit_form',['category'=> $category]);
    }
    public function category_update(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'status' => 'required'
        ]);
        $category = Category::find($request->category_id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
        return back()->with('Category_update_message','Category Updated Successfully');
    }
}
