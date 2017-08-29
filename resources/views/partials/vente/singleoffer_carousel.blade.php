                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            @foreach($abonnements as $abon) 

                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="/{{$abon->image}}" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">{{$abon->title}}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>{{$abon->pricenew}}</ins> <del>{{$abon->priceold}}</del>
                                    </div> 
                                </div><!--single-product-->
                             @endforeach    
                            </div><!--related-products-carousel-->
                        </div><!--related-products-wrapper-->