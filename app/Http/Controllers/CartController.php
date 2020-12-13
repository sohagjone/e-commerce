<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Cart;
use Session;


class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	 
    	$product = Product::find($request->id);
    	Cart::add([
    		'id' =>$product->id, 
    		'name' => $product->product_name,
    		'price' => $product->product_price,
    		'quantity' =>$request->product_quantity,
    		'attributes' => [
    		      'product_image'=>$product->product_image,
    		]
		]);
	return view('front-interface.cart_show', ['getTotal'=>Cart::getTotal(),'getsubTotal'=>Cart::getSubTotal(), 'getTotalQuantity'=>Cart::getTotalQuantity(),'CartGetContents'=>Cart::getContent(),'id'=>$product->category_id]);
		
    }
    public function cart_item_remove($id)
    {
        Cart::remove($id);
        return back();
    }
}
