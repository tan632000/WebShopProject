<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use App\Models\Product;

class CartController extends Controller
{
    public function list_cart() {
        $all_cart_products = CartFacade::getContent();
        return view('frontend/cart/giohang', ['all_cart_products', $all_cart_products])->with(compact('all_cart_products'));
    }

    public function product_add_to_cart(Request $request){
        $product = Product::find($request->id);
        CartFacade::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $product->image,
            ]
        ]);
        return redirect('/cart/add')->with('message_add_cart','Cart Added Successfully');
    }

    public function cart_remove_item_pro_id($id)
    {
        CartFacade::remove($id);
        return back()->with('message_remove_cart','Cart Deleted Successfully');
    }

    public function cart_update_item_pro_id(Request $request){
        CartFacade::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));
        return back()->with('message_update_cart','Cart Updated Successfully');
    }
}
