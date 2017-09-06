@extends('layouts.app_sales')
@section('title')
    Vente-Abonnements-Announces
@endsection
@section('title')
    Laravel Shopping Cart
@endsection
@section('links')
  @include('partials.vente.links')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $(".add-to-cart-link").click(function(){
        //alert('Button hidden');
        $(this).hide();
    });
});
          
    </script>
@endsection
@section('content')
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
           
          <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h4 class="section-title">Des Abonnements offert</h4>
                        <div class="product-carousel">
                            



                        @foreach($abonnement as $abon)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src={{$abon->image}} alt="">
                                    <div class="product-hover">
                                        <a href="{{action('ShopController@rapid_abonnement',['id'=>$abon->id])}}" class="add-to-cart-link" id="yes"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{action('PageController@show',['id'=>$abon->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>

                                    </div>
                                </div><!--End of Product-f-Image-->
                                <h2><a href="single-product.html">{{$abon->title}}</a></h2>
                                <div class="product-carousel-price">
                                    <ins>{{$abon->currency}}{{$abon->pricenew}}</ins> <del>{{$abon->currency}}{{$abon->priceold}}</del>
                                </div>
                                
                            </div><!--End of Single Product-->
                        @endforeach
                             
                        </div><!--End of Product Carousel-->
                    </div><!--End of Latest Product-->
                </div><!--End of col-md-12-->
            </div><!--End of Row-->


           @include('partials.vente.announce')
        </div>
    </div> <!-- End main content area -->
     @include('partials.vente.sites_partner')
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
                @include('partials.vente.meilleur_vente')
                @include('partials.vente.recentlyviewed')
                @include('partials.vente.topnew')
                
                </div>
            </div>
        </div>
<button class="btn btn-default" id="yes">hello</button> 
    </div> <!-- End product widget area -->
@endsection
@section('script')
    @include('partials.vente.scripts')
    
@endsection