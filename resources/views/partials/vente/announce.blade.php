<div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h4 class="section-title">Nouvelles annonces</h4>
                        <div class="product-carousel">
                            



                        @foreach($announce as $anon)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src={{$anon->image}} alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{route('announces.show',['id'=>$anon->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div><!--End of Product-f-Image-->
                                
                                <h2><a href="single-product.html">{{$anon->title}}</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>{{$anon->pricenew}}</ins> <del>{{$anon->priceold}}</del>
                                </div> 
                            </div><!--End of Single Product-->
                        @endforeach
                             
                        </div><!--End of Product Carousel-->
                    </div><!--End of Latest Product-->
                </div><!--End of col-md-12-->
            </div><!--End of Row-->
