                <div class="features_items"><!--features_items-->
                      <h2 class="title text-center">Features Items</h2>
                      @foreach($latest_products as $latest_product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('admin-interface/uploads/product_images')}}/{{$latest_product->product_image}}" alt="" height="268" width="249" />
                                            <h2>৳{{$latest_product->product_price}}</h2>
                                            <p>{{$latest_product->product_name}}</p>
                                            <a href="{{route('product_details', ['id'=>$latest_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>৳{{$latest_product->product_price}}</h2>
                                                <p>{{$latest_product->product_name}}</p>
                                                <a href="{{route('product_details', ['id'=>$latest_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                           </div>
                           @endforeach  
                     </div><!--features_items-->
