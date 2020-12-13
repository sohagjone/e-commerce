<section id="cart_items">
		<div class="container">
			
<div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header  mb-3 text-center text-warning">
                        Dear <strong style="color:red;">{{Session::get('customer_name')}}</strong> .You have to give us product shipping info to complete your valuable order.if your billing info are same then just press on save shipping info button
                    </div>
                </div>
      </div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-1">
						<div class="shopper-info">
					
							
						</div>
					</div>
					<center><div class="col-sm-8 clearfix">
						<div class="bill-to">
							<h1>Shipping</h1>
							<center><div class="shopper-info">
					<form action="{{route('shipping_save')}}" method="post">
					 @csrf
					<input type="text" placeholder="First Name*" value="{{$customer->first_name}}" name="first_name">
					<input type="text" placeholder="Last Name *" value="{{$customer->last_name}}" name="last_name">
					<input type="text" placeholder="Email*" value="{{$customer->email}}" name="email">
					<input type="text" placeholder="Phone Number*" value="{{$customer->phone}}" name="phone">
					<input type="text" placeholder="Address-1*" value="{{$customer->address_1}}" name="address_1">
					<input type="text" placeholder="Address-2*" value="{{$customer->address_2}}" name="address_2">
					<input type="text" placeholder="Zip/Postal Code *" value="{{$customer->postal}}" name="postal">
					<input type="text" placeholder="Province*" value="{{$customer->province}}" name="province">
					<input type="text" placeholder="Country*" value="{{$customer->country}}" name="country">
					<center><button type="submit" class="btn btn-primary">Confirm Order</button></center>
					</form>
						</div></center>
						   </div>
							  </div>
										
				</div>
			</div>
			

			
	</section> <!--/#cart_items-->