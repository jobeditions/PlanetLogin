@extends('layouts.app_sales')


    @section('title')
    Des Abonnements
    @endsection
    @section('links')
    @include('partials.vente.links')
    @endsection
    
    @section('content')

    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                    @include('partials.vente.single_product.singleoffer_sidebar')
                    @include('partials.vente.single_product.singleoffer_sidebar1')
                    
                </div><!--row-->
                @include('partials.vente.single_product.single_announce')
                
                @include('partials.vente.single_product.singleoffer_carousel')        
                        
                 </div><!--product-content-right-->             
               </div><!--col-md-8-->
            </div><!--col-md-4-->
        </div><!--col-row-->
    </div><!--container-->
</div><!--single-product-area-->
  @endsection
  @section('script')
  @include('partials.vente.scripts')
  @endsection
  </body>
</html>