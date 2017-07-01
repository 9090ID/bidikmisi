<?php
    $userlogin = Request::user();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bidik Misi - Universitas Jambi</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bread.css')}}" rel="stylesheet">
    <link href="{{asset('/css/hiasanku.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
 
    
 
    @section("stylesheet")
   
    @show

  </head>

  <body>
  <!--
<h6 style="text-align: right;color:red;">Hy, {{Auth::user()->username}}</h6>
-->
  
    <div class="container">
      <div class="row">
           @section("container")@show
      </div>
    </div><!-- /.container -->
     @section("modal")
    @show

 <footer class="container-fluid text-center bg-lightgray">

        <div class="copyrights" style="margin-top:25px;">
            <p>Bagian Kemahasiswaan © 2017, All Rights Reserved
                <br>
                <span>Web Design By: 9090ID in Account Github</span></p>
                 <p><center><h6 style="text-align: open sans;">Hy, Anda Login Sebagai {{Auth::user()->username}}</h6></p>
            <p><a href="https://github.com/9090ID" target="_blank" style="text-decoration: none;">Github <i class="fa fa-github" aria-hidden="true"></i> </a> &nbsp <a href="{{URL::to('logout')}}" style="text-decoration: none;"><i class="fa fa-sign-out fa-fw"></i>Logout</a></h5></p>
        </div>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.min.js')}}"></script>
    <script src="{{asset('js/jquery.spinner.js')}}"></script>
    <script src="{{asset('js/accounting.min.js')}}"></script>
    <script src="{{asset('script/init.js')}}"></script>
  
    <script type="text/javascript">
        var base_url = '{{URLGroup()}}';
      var root_url = '{{URL::to('')}}';
    </script>
    @section("javascript")
   <script type="text/javascript">
         
   </script>
    @show
 </body>
</html>
