<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('links')
    
  </head>
  <body>
    @include('partials.vente.header')
    @include('partials.vente.nomdusite')  
    @yield('content')
    
   @include('partials.vente.footer_top')
   @include('partials.vente.footer_bottom')

   @yield('script')
  </body>
</html>