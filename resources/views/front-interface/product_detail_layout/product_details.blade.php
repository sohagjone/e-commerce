<div class="col-sm-9 padding-right">
          <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
              <div class="view-product">
                <img src="{{asset('admin-interface/uploads/product_images')}}/{{$product->product_image}}" />
              </div>
              <div id="similar-product" class="" >
                  <!-- Controls -->
                  
              </div>

            </div>

            <div class="col-sm-7">
              <div class="product-information">
                <h2>{{$product->product_name}}</h2>
                <span>
                  <span>৳{{$product->product_price}}</span>
                  <form action="{{route('add_to_cart')}}" method="post">
                    @csrf
                  <label>Quantity:</label>
                  <input type="number" name= "product_quantity" value="1" />
                  <input type="hidden" name= "id" value="{{$product->id}}" />
                  <button type="submit" class="btn btn-fefault cart" >
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                  </button>
                  </form>
                </span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Brand:</b> Info Soft</p>
              </div>
            </div>
          </div>