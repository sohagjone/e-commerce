<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description" align="center">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td class="delete"></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($CartGetContents as $CartGetContent)
                        <tr>
                            <td class="cart_product">
                        <a href="#"><img src="{{asset('admin-interface/uploads/product_images')}}/{{$CartGetContent->attributes->product_image}}" width="50" height="50">
                        </a>
                            </td>
                            <td class="cart_description">
                            <h4><a href="#">{{$CartGetContent->name}}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p>৳ {{$CartGetContent->price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input type="number" name="quantity" value="{{$CartGetContent->quantity}}" autocomplete="off" size="2" class="btn btn-fefault cart" readonly="readonly" >      
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">৳ {{$CartGetContent->quantity*$CartGetContent->price}}</p>
                            </td>
                            <td > 
                          
                   <a class="cart_quantity_delete"  
        href="# {{url('cart_item_remove')}}/{{$CartGetContent->id}}"><i class="fa fa-times"></i></a>
                    </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">  
                       
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span style="color:red;">৳ {{$getsubTotal}}/-</span></li>
                            <li>Shipping Cost<span>Free</span></li>
                            <b><li style="color:red;">Total <span>৳ {{$getTotal}}/-</span>
                                        @php
                                         Session::put(['getTotal'=>$getTotal]);
                                        @endphp
                            </li></b>
                        </ul>
                       <a class="btn btn-default check_out pull-right" href="{{route('customer_form')}}">Check Out</a>            
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->