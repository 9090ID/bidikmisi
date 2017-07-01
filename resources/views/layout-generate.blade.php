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

    <title>Generate</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>

  <body>


    <div class="container">
      <div class="row"  style="margin-top: 100px;">
          <div class="col-md-offset-2 col-md-8">
            @section("container")@show
          </div>
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
    <script type="text/javascript">
        var base_url = '{{URLGroup()}}';
      var root_url = '{{URL::to('')}}';
    </script>
    @section("javascript")
    @show
 </body>
</html>
