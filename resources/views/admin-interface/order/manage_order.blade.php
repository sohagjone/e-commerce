@extends('admin-interface/app')

@section('dashboard')
<table class="table table-bordered table hover table-responsive">
	<thread>
		<tr>
			<th>Order No.</th>
			<th>Customer Name</th>
			<th>Total Price</th>
			<th>Payment Type</th>
			<th>Payment Status</th>
			<th>Order Status</th>
			<th>Order Date</th>
			<th>Action</th>
		</tr>
	</thread>
	<tbody>

		@foreach($orders as $order)
		<tr>
			<td>{{$order->id}}</td>
			<td>{{$order->orderRelationcustomer->first_name.' '.$order->orderRelationcustomer->last_name}}</td>
			<td>{{$order->total_price}}</td>
			<td>{{$order->payment_type}}</td>
			<td>{{$order->payment_status}}</td>
			<td>{{$order->order_status}}</td>
			<td>{{$order->created_at}}</td>
			<td>
				 <div class="btn-group">
                                        <a class="btn btn-info" href="{{route('order_details', ['order_id'=>$order->id])}}" title="view Order details"><i class="fas fa-info"></i></a>
                                        <a class="btn btn-success" href="{{route('order_invoice', ['order_id'=>$order->id])}}" title="view Order Invoice"><i class="fas fa-file-invoice"></i></a>
                                        <a class="btn btn-primary" href="{{route('order_invoice_download', ['order_id'=>$order->id])}}" title="Order Invoice Download"><i class="fas fa-file-download"></i></a>
                                        <a class="btn btn-danger" href="" title=" Order Delete"><i class="fas fa-trash-alt"></i></a>
                                        <a class="btn btn-warning" href="" title=" Order Edit"><i class="far fa-edit"></i></a>
                                    </div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection