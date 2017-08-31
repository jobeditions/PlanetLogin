@extends('layouts.app_sales')
@section('title')
    Vente-Abonnements-Announces
@endsection
@section('title')
    Laravel Shopping Cart
@endsection
@section('links')
    @include('partials.vente.links')
@endsection
@section('content')
    <div class="maincontent-area">
     @include('partials.vente.sites_partner')
        <div class="zigzag-bottom"></div>
        <div class="container">
           @include('partials.vente.announce')
           @include('partials.vente.abonnement')
        </div>
    </div> <!-- End main content area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
                @include('partials.vente.meilleur_vente')
                @include('partials.vente.recentlyviewed')
                @include('partials.vente.topnew')
                
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
@endsection
@section('script')
    @include('partials.vente.scripts')
@endsection