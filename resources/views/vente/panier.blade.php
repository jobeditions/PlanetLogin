@extends('layouts.app_sales')
   @section('links')
   @include('partials.vente.links')
   @endsection
   @section('content')
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                  @include('partials.vente.single_product.singleoffer_sidebar')
                  @include('partials.vente.single_product.singleoffer_sidebar1')  
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                             
                             @include('partials.vente.panier.cart')
                            <div class="cart-collaterals">

                             @include('partials.vente.panier.cross_sales')
                             @include('partials.vente.panier.purchase')

                             @include('partials.vente.panier.shipping_calculations')
                            


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
  @include('partials.vente.scripts')
@endsection