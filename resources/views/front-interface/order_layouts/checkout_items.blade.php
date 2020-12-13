<div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
                
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mb-5 ">

               <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mb-4">
            <h2 class="text-center"> <strong style="color:red;">{{Session::get('customer_name')}}</strong> Thanks For Your Ordered</h2>
            <table class="table table-hover table-bordered ">
                <tr>
                    <th>Order No</th>
                    <td>{{$customer->order_id}}</td>
                </tr>
                <tr>
                    <th>Ordet Total</th>
                    <td>৳{{$customer->product_price}}/-</td>
                </tr>
                <tr>
                    <th>Ordet Quantity</th>
                    <td>{{$customer->product_quantity}}</td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td>{{$customer->product_name}}</td>
                </tr>
                <tr>
                    <th>Product Image</th>
                    <td><img width="50" height="50" src="{{asset('admin-interface/uploads/product_images')}}/{{$customer->product_image}}"></td>
                </tr>
                
                <tr>
                    <th>Order Date</th>
                    <td>{{$customer->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>

</div>
           </form>
        </div>
    </div>
</div>