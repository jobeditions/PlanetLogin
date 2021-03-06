<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR">
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="language" content="fr-FR" />
    <meta name="author" content="Ashok DEB">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />    
    
	<link href="/css/widgets.css" rel="stylesheet">
    <link href="/css/nextstyle.css" rel="stylesheet">
    <link href="/css/nextstyle-responsive.css" rel="stylesheet" />
	<link href="/css/nextjquery-ui-1.10.4.min.css" rel="stylesheet">
  <link href="/css/toastr.min.css" rel="stylesheet">
 
  </head>

  <body>
  
  <!-- container section start -->
  <section id="container" class="">
     
      
      
      <!--header -->
      @include('partials.user.header')

      <!--sidebar start-->
      
      @include('partials.user.sidebar')
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">       
		  
		 @yield('content')
              
       
          
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="/js/jquery.js"></script>
	 <script src="/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="/js/jquery.sparkline.js" type="text/javascript"></script>
   
    <script src="/js/calendar-custom.js"></script>
	
    <!-- custom select -->
    <script src="/js/jquery.customSelect.min.js" ></script>
	
    <!--custome script for all page-->
    <script src="/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="/js/sparkline-chart.js"></script>
    
	<script src="/js/jquery.autosize.min.js"></script>
	<script src="/js/jquery.placeholder.min.js"></script>
	<script src="/js/gdp-data.js"></script>	
	<script src="/js/morris.min.js"></script>
	<script src="/js/sparklines.js"></script>	
	
  <script src="/js/toastr.min.js"></script>
	<script src="/js/jquery.slimscroll.min.js"></script>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  
  </script>
  <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif
    </script>

  </body>
</html>
