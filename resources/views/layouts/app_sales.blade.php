<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @include('partials.vente.links')
    
  </head>
  <body>
    @include('partials.vente.header')
    @include('partials.vente.nomdusite')  
    <div class="maincontent-area">
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
    
   @include('partials.vente.footer_top')
   @include('partials.vente.footer_bottom')
   @include('partials.vente.scripts')
  </body>
</html>