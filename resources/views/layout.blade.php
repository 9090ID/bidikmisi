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
    <link href="{{asset('/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    @section("stylesheet")
    @show
  </head>

  <body>

 <div id="wrapper">

        <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="font-family: andalus;">Data Calon Penerima Bidikmisi Universitas Jambi</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
              <!--menu samping user-->
              <li>
                    <a class="" href="{{URLGroup('bidikmisi/mahasiswa')}}" title="data master">
                        <i class="fa fa-folder fa-fw"></i><sup><i style="color:red;">new!</i></sup> </a>
              </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{URL::to('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


            <!--menu side bar utama-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       

        </nav>

    <div class="container">
      <div class="row">
           @section("container")@show
      </div>
    </div><!-- /.container -->
     @section("modal")
    @show
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('raphael/raphael.min.js')}}"></script>
    <script src="{{asset('morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    <script type="text/javascript">
        var base_url = '{{URLGroup()}}';
      var root_url = '{{URL::to('')}}';
    </script>
    @section("javascript")
    @show
 </body>
</html>
