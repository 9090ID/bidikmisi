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

    <title>Login | Bidik Misi</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>

  <body>


    <div class="container">
 
            <div class="row"  style="margin-top: 30px;">
          <div class="col-md-offset-4 col-md-4">
            <center>
            <img src="unj.png" width="90px" height="90px"><br><b style="font-family:Tangerine;font-size: 20px;color:orange;">Sistem Informasi <br> Calon Penerima Bidikmisi Universitas Jambi</b>
            </center>
            <div class="panel panel-default">
                <div class="panel-heading" style="background: orange; color:white; font-family: Tangerine;">
                    <div class="panel-title">
                        <h4><center><b>LOGIN USER </b></center></h4>
                    </div>
                </div>
                <div class="panel-body">
                    {!!Form::open(['url' => URL::to("submit-login"), 'name'=>'form-login'])!!}
                    <div class="form-group">
                        <label class="col-md-12">Username</label>
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <center>
                        <button class="btn btn-primary"> Login</button>
                    </center>
                    {!!Form::close()!!} 
                </div>
            </div>
          </div>
 

    </div>
      
    </div><!-- /.container --><br>
   <center><b><div  id="textDestination"  style="color:none; font-size: 20px;font-family:Merriweather;"></div></b> </center>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script language="JavaScript">
            var text="Copyright@Baksi-Create_By_Muhammad_Farhan_2017";
            var delay=30;
            var currentChar=1;
            var destination="[none]";
                            function type(){
                                                var dest=document.getElementById(destination);
                                                if (dest)// && dest.innerHTML)
                                            {
                                                dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
                                                currentChar++;if (currentChar>text.length) { currentChar=1;
                                                setTimeout("type()", 5000);
                                                } else {
                                                setTimeout("type()", delay);
                                                } } }
                                                function startTyping(textParam, delayParam, destinationParam) {
                                                text=textParam;
                                                delay=delayParam;
                                                currentChar=1;
                                                destination=destinationParam;
                                                type(); } 
            </script> 
                                                    <script language="JavaScript"> javascript:startTyping(text, 50, "textDestination");</script>
 </body>
</html>
