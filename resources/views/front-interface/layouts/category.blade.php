 <div class="category-tab">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                            <li class="active"><a href="#tshirt" data-toggle="tab">All</a></li>
                                @foreach($all_categories as $all_category)
                                <li><a href="#tab{{$all_category->id}}" data-toggle="tab">{{$all_category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content">
                             <div class="tab-pane fade active in" id="tab">
                                @foreach($all_products as $all_product)
                                 <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img href="{{route('product_details', ['id'=>$all_product->id])}}"

                                                src="{{asset('admin-interface/uploads/product_images')}}/{{$all_product->product_image}}" alt="" height="208" width="183" />
                                                <h2>৳{{$all_product->product_price}}</h2>
                                                <p>{{$all_product->product_name}}</p>
                                                <a href="{{route('product_details', ['id'=>$all_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach 
                            </div>   
                         @foreach($all_categories as $all_category)
                            <div class="tab-pane fade" id="tab{{$all_category->id}}" >
                                @foreach($all_products as $all_product)
                                @if($all_category->id == $all_product->category_id)
                                 <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img href="{{route('product_details', ['id'=>$all_product->id])}}" 
                                                src="{{asset('admin-interface/uploads/product_images')}}/{{$all_product->product_image}}" alt="" />
                                                <h2>৳{{$all_product->product_price}}</h2>
                                                <p>{{$all_product->product_name}}</p>
                                                <a href="{{route('product_details', ['id'=>$all_product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach 
                            </div>   
                        @endforeach
                        </div>
                    </div> 
                            
                            
                            
                            
                           

                        