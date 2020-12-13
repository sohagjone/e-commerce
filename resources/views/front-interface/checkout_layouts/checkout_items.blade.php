<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{url('/')}}">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5">
			
					@if (session('worng_message'))
                    <div class="alert alert-danger">
                         {{session('worng_message')}}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                    </div>
                     @endif
						<div class="shopper-info">
							<p>Shopper Information</p>
					<form action="{{route('login_customer')}}" method="post">
						@csrf
						<input type="email" placeholder="Email" name="email"  required />
						<input type="password" placeholder="Password" name="pass" required />
						<button type="submit" class="btn btn-primary">Continue</button>
							</form>
							
						</div>
					</div>
					<div class="col-sm-7 clearfix">
						@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
								<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<div class="bill-to">
							<p>Registration</p>
							<div class="shopper-info">
					<form action="{{route('customer_signup')}}" method="post">
									@csrf
					<input type="text" placeholder="First Name*" name="first_name"  required />
					<input type="text" placeholder="Last Name *" name="last_name" required />
					<input type="Email" placeholder="Email*" name="email" required/>
					<input type="password" placeholder="Password*" name="pass" required />
					<input type="number" placeholder="Phone Number*" name="phone" required />
					<input type="text" placeholder="Address-1*" name="address_1" required />
					<input type="text" placeholder="Address-2*" name="address_2"  required />
					<input type="text" placeholder="Zip / Postal Code *" name="postal"  required />
					<input type="text" placeholder="Province*" name="province" required />
					<input type="text" placeholder="Country*" name="country"  required />
					<button type="submit" class="btn btn-primary">Registration</button>
					</form>
						</div>
						   </div>
							  </div>
									
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->