<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use Image;
use Carbon\Carbon;


class ProductController extends Controller
{
    Public function product_form()
    {
    	$categories = DB::table('categories')->where('publication_status', 1)->get();
    	return view('admin-interface.product.product_form', ['categories'=>$categories]);
    }
    public function product_save(Request $request)
    {
    	$validatedData = $request->validate([
    		'product_name' => 'required',
    		'category_id' => 'required',
    		'product_short_description' => 'required',
    		'product_long_description' => 'required',
    		'product_price' => 'required|integer',
            'product_image' => 'required',
    		'publication_status' => 'required',
    	]);

    	$present_id = DB::table('products')->insertGetId([
    		'product_name' => $request->product_name,
    		'category_id' => $request->category_id,
    		'product_short_description' =>  $request->product_short_description,
    		'product_long_description' =>  $request->product_long_description,
    		'product_price' =>  $request->product_price,
    		'publication_status' =>  $request->publication_status,
            'created_at'=>Carbon::now(),
    	]);

        if($request->hasFile('product_image'))
        {
        
        $file_name = $present_id.'.'.$request->product_image->getClientOriginalExtension();
        Image::make($request->product_image)->save(base_path('public/admin-interface/uploads/product_images/'. $file_name),50);
        DB::table('products')
        ->where('id', $present_id)
        ->update([
            'product_image' => $file_name, 
        ]);

        }    
    return back()->with('product_add_msg', 'Product Added Successfully');
    }
    Public function manage_product()
    {
        $products = Product::paginate(3);
        return view('admin-interface.product.product_manage', ['products'=>$products]);
    }
    public function unpublished_product($id)
    {
    	$product = Product::find($id);
    	$product->publication_status = 0;
    	$product->save();
  		return back()->with('unpublish_status_msg', 'Product Unpublished Successfully');
    }
    public function published_product($id)
    {
    	$product = Product::find($id);
    	$product->publication_status = 1;
    	$product->save();
    	return back()->with('publish_status_msg', 'Product Published Successfully');
    }
    public function product_edit($id)
    {
    	
    	$categories = DB::table('categories')->where('publication_status', 1)->get();
    	$product = DB::table('products')->where('id', $id)->first();
    	return view('admin-interface.product.product_edit', ['product'=> $product , 'categories'=>$categories]);
    }
    public function product_delete($id)
    {
	
        DB::table('products')->where('id', $id)->delete();
    	return back()->with('product_delete_msg', 'Product Deleted Successfully');
    }
    public function product_update(Request $request)
    {
    	$validatedData = $request->validate([
    		'product_name' => 'required',
    		'category_id' => 'required',
    		'product_short_description' => 'required',
    		'product_long_description' => 'required',
    		'product_price' => 'required|integer',
    		'publication_status' => 'required',
    	]);

    	DB::table('products')->where('id', $request->product_id)->update([
    		'product_name' => $request->product_name,
    		'category_id' => $request->category_id,
    		'product_short_description' =>  $request->product_short_description,
    		'product_long_description' =>  $request->product_long_description,
    		'product_price' =>  $request->product_price,
    		'publication_status' =>  $request->publication_status
    	]);
        if($request->hasFile('product_image'))
        {
        $product = Product::find($request->product_id);
        if($product->product_image == 'default.jpg')
        {
        $file_name = $request->product_id.'.'.$request->product_image->getClientOriginalExtension();
        Image::make($request->product_image)->save(base_path('public/admin-interface/uploads/product_images/'. $file_name),50);
        DB::table('products')
        ->where('id', $request->product_id)
        ->update([
            'product_image' => $file_name, 
        ]);
        }
        else 
        {
        unlink(base_path('public/admin-interface/uploads/product_images/'. $product->product_image));
        $file_name = $request->product_id.'.'.$request->product_image->getClientOriginalExtension();
        Image::make($request->product_image)->save(base_path('public/admin-interface/uploads/product_images/'. $file_name),50);
        DB::table('products')
        ->where('id', $request->product_id)
        ->update([
            'product_image' => $file_name, 
        ]);
        }
        }    
    	return redirect('/manage_product')->with('product_update_msg', 'Product Updated Successfully');
    }
    
}
