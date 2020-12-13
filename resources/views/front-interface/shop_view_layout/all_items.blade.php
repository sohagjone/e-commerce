 <div class="features_items"><!--features_items-->
   @if (session('Order_message'))
                    <div class="alert alert-danger">
                         {{session('Order_message')}}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                    </div>
                     @endif
                      <h2 class="title text-center">All Items</h2>
                      @foreach($all_products as $all_product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('admin-interface/uploads/product_images')}}/{{$all_product->product_image}}" alt="" height="260" width="240"/>
                                            <h2>৳{{$all_product->product_price}}</h2>
                                            <p>{{$all_product->product_name}}</p>
                                            <a href="{{route('product_details', ['id'=>$all_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>৳{{$all_product->product_price}}</h2>
                                                <p>{{$all_product->product_name}}</p>
                                                <a href="{{route('product_details', ['id'=>$all_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                           </div>
                           @endforeach  
                     </div><!--features_items-->

            
            <ul class="pagination">
              {{$all_products->links()}}
            </ul>
          </div><!--features_items-->


                
               