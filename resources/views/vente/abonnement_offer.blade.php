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
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    @include('partials.vente.singleoffer_sidebar')
                    @include('partials.vente.singleoffer_sidebar1')
                    
                </div>
                @include('partials.vente.single_offer')
        </div>
    </div>
                @include('partials.vente.singleoffer_carousel')        
                        
                        

                    </div>                    
                </div>
            </div>
        </div>
    </div>
  @endsection
  @section('script')
  @include('partials.vente.scripts')
  @endsection
  </body>
</html>