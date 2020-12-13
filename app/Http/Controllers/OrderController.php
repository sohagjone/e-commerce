<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use App\Shipping;
use App\OrderDetail;
use Cart;
use PDF;

class OrderController extends Controller
{
    public function order_manage()
    {

    	$orders = Order::all();
    	return view('admin-interface.order.manage_order', compact('orders'));
    }
    public function order_details($order_id)
    {
    	$order = Order::find($order_id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$order_details = OrderDetail::where('order_id', $order_id)->get();
    	return view('admin-interface.order.order_details', compact('order', 'customer', 'shipping', 'order_details'));
    }
    public function order_invoice($order_id)
    {
    	$order = Order::find($order_id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$order_details = OrderDetail::where('order_id', $order_id)->get();
    	return view('admin-interface.order.order_invoice', compact('order', 'customer', 'shipping', 'order_details'));
    }
    public function order_invoice_download($order_id)
    {
    	$order = Order::find($order_id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$order_details = OrderDetail::where('order_id', $order_id)->get();
    	$pdf = PDF::loadView('admin-interface.order.order_invoice_download', compact('order', 'customer', 'shipping', 'order_details'));
    	return $pdf->download('order.pdf');
    }
}
