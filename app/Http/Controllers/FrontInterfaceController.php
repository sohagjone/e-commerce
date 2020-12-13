<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class FrontInterfaceController extends Controller
{
    public function index()
    {
    $latest_products = Product::where('publication_status', 1)->orderBy('id', 'DESC')->take(10)->get();
    return view('front-interface.home', ['latest_products'=>$latest_products]);
    }
    public function product_details($id)
    {
    $product = Product::find($id);
    return view('front-interface.product_details',['product'=>$product]);
    }
    public function shop_page_view()
    {
    $all_products = Product::where('publication_status', 1)->paginate(12);
    return view('front-interface.shop_page_view',['all_products'=> $all_products]);
    }
    public function show_product_category($id)
    {
    $category_products = Product::where('publication_status', 1)->where('category_id', $id)->paginate(5);
    return view('front-interface.shop_page_view',['all_products'=> $category_products]);

    }
}
