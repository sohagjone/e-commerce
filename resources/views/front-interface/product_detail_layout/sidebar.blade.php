  <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><h5><i class="fa fa-plus"></i></h5></span>
                                            <h1 style="color:orange;">Category</h1>
                                        </a>
                                    </h4>
                                </div>

                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                        @foreach($all_categories as $all_category)
                                        <ul>
                <li><a href="{{route('show_product_category',['id'=>$all_category->id])}}">{{$all_category->category_name}}</a></li>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                           

                            <div class="panel panel-default">
                                <div class="panel-heading">
                              </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">    
                                </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">       
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                            </div>
                            <div class="panel panel-default"> 
                            </div>
                            <div class="panel panel-default"> 
                            </div>
                            <div class="panel panel-default"> 
                            </div>
                            <div class="panel panel-default">   
                            </div>
                            <div class="panel panel-default">  
                            </div>
                            <div class="panel panel-default">
                            </div>
                        </div><!--/category-products-->
                    <!--brands_products-->
                        <!--<div class="brands_products">
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div>-->
                        <!--/brands_products-->
                        <!--price-range-->
                        <!--<div class="price-range">
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>--><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('front-interface/images/home/shipping.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                    </div>
                
                <div class="col-sm-9 padding-right">