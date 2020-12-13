<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\OrderDetail;
use App\Mail\SentCustomer;
use Mail;
use Session; 
use Cart;



class CheckoutController extends Controller
{
    public function customer_form()
    {
    	return view('front-interface.checkout');
    }
    public function customer_signup(Request $request)
    {
    	$request->validate([
            'email'=>'required|unique:customers,email'
        ]);
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email = $request->email;
    	$customer->pass = bcrypt($request->pass);
    	$customer->phone = $request->phone;
    	$customer->address_1= $request->address_1;
    	$customer->address_2 = $request->address_2;
    	$customer->postal = $request->postal;
    	$customer->province = $request->province;
    	$customer->country = $request->country;
    	$customer->save();
        Session::put(['customer_id'=>$customer->id]);
        Session::put(['customer_name'=> $customer->first_name.' '.$customer->last_name]);
        //Mail::to($request->email)->send(new SentCustomer($customer));
    return redirect('/checkout-shipping');
    }
    public function sipping_signup()
    {

        $customer = Customer::find(Session::get('customer_id'));
        return view('front-interface.shipping', ['customer'=>$customer]);
    }
    public function shipping_save(Request $request)
    {
        //return $request->all();
        $shipping = new Shipping();
        $shipping->first_name = $request->first_name;
        $shipping->last_name = $request->last_name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address_1= $request->address_1;
        $shipping->address_2 = $request->address_2;
        $shipping->postal = $request->postal;
        $shipping->province = $request->province;
        $shipping->country = $request->country;
        $shipping->save();
        Session::put(['shipping_id'=>$shipping->id]);
        return redirect('/checkout-payment');
    }
    public function payment_form()
    {
         return view('front-interface.payment');
        
    }
    public function order_save(Request $request)
    {
        //return $request->payment_type;
        if($request->payment_type == 'Cash')
        {
            $order = new Order();
            $order->customer_id = Session::get('customer_id');
            $order->shipping_id = Session::get('shipping_id');
            $order->total_price = Session::get('getTotal');
            $order->payment_type = $request->payment_type;
            $order->save();

            //return $order->id;

            $cartContents = Cart::getContent();

            foreach($cartContents as $cartContent)
            {

            $order_details = new OrderDetail();
            $order_details->order_id = $order->id;
            $order_details->product_id = $cartContent->id;
            $order_details->product_name = $cartContent->name;
            $order_details->product_image = $cartContent->attributes->product_image;
            $order_details->product_price = $cartContent->price;
            $order_details->product_quantity = $cartContent->quantity;
            $order_details->save();
            }
            Cart::clear();
            return redirect('/shop_page_view')->with('Order_message', 'Thanks For Your Ordered');
            //return redirect()->route('order_invoice_download', $order->id);
        }
        elseif($request->payment_type == 'Paypal')
        {
            return 'Ami Paypal';
        }
        elseif($request->payment_type == 'Bkash')
        {
            return 'Ami Bkash';
        }
    }
    public function logout_customer()
    {
        session()->forget(['customer_id', 'customer_name', 'shipping_id']);
        return redirect('/');
    }
    public function order_history()
    {
        $customer = OrderDetail::find(Session::get('customer_id'));
        return view('front-interface.order_history', ['customer'=>$customer]);
    }

}
