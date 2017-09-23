    <!--<script src="/js/jquery.js"></script>-->
	<!--<script src="/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <!--<script src="/js/jquery.customSelect.min.js" ></script>-->
	
    <!--custome script for all page-->
    <script src="/js/scripts.js"></script>
    <!-- custom script for this page
    <script src="/js/sparkline-chart.js"></script>
    
	<script src="/js/jquery.autosize.min.js"></script>
	<script src="/js/jquery.placeholder.min.js"></script>-->
  <script src="/js/toastr.min.js"></script>
  <!--<script src="/js/jquery.slimscroll.min.js"></script>-->

  
   <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif
    </script>