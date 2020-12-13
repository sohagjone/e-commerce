<div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                               
                                <!--<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>-->
                                <!--<li><a href="#tag" data-toggle="tab">Tag</a></li>-->
                                <li class="active"><a href="#short" data-toggle="tab">Product Short Brief</a></li>
                                <li class=""><a href="#long" data-toggle="tab">Product Details</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="short">
                                <div class="col-sm-12">
                                    <p>{{$product->product_short_description}}</b></p>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="long">
                                <div class="col-sm-12">
                                    <p>{!!$product->product_long_description!!}</b></p>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->