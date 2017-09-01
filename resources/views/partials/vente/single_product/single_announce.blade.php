
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">{{$abons->title}}</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="/{{$abons->image}}" alt="">
                                    </div><!--product-main-img-->
                                    
                                    <div class="product-gallery">
                                        
                                        <img src="/img/ecommerce/product-thumb-1.jpg" alt="">
                                        <img src="/img/ecommerce/product-thumb-2.jpg" alt="">
                                        <img src="/img/ecommerce/product-thumb-3.jpg" alt="">
                                        <img src="/img/ecommerce/product-thumb-4.jpg" alt="">
                                    </div><!--photo-gallery-->
                                </div><!--product-images-->
                            </div><!--col-sm-6-->
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"></h2>
                                    <div class="product-inner-price">
                                        <ins>{{$abons->currency}}{{$abons->pricenew}}</ins> <del>{{$abons->currency}}{{$abons->priceold}}</del>
                                    </div>    
                                    
                                    <form action="{{route('cart.announce')}}" class="cart" method="post">
                                     {{csrf_field()}}
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="Qty" min="1" step="1">
                                        </div>
                                        <input type="hidden" name="product_id" value={{$abons->id}}>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>{{$abons->title}}</h2>  
                                                <p>{{$abons->description}}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div><!--submit-review-->
                                            </div><!--tab-pane fade-->
                                        </div><!--tab-content-->
                                    </div><!--tab-panel-->
                                    
                                </div><!--product-inner-->
                            </div><!--col-sm-6-->
                        </div><!--row-->
                        
