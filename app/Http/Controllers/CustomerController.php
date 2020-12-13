<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;

class CustomerController extends Controller
{
   public function login_customer(Request $request)
    {
    	$request->validate([
            'email'=>'required'
        ]);
       if($customer = Customer::where('email', $request->email)->first())
       {
       	 if(password_verify($request->pass, $customer->pass))
       	 {
       	 	 Session::put(['customer_id'=>$customer->id]);
       		 Session::put(['customer_name'=> $customer->first_name.' '.$customer->last_name]);
       		 return redirect()->route('sipping_signup');
       	 }
       	 else
       	 {
       	 	return back()->with('worng_message','Please give the Correct PASSWORD');
       	 }
       }
       else
       { 	
		return back()->with('worng_message','Please give the Correct Email Address');
       }
    }
}
