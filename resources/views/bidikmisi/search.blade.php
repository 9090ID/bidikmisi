@extends('templates')
@section("container")
<!--
<script type="text/javascript">
    $(document).ready(function(){
        $("#content").css("display","none");
        $("#content").fadeIn(50);
        $(".bms_fade").click(function(event){
        event.preventDefault();
        linkLocation= this.href;
        $("#content").fadeOut(50,redirectPage);
        });
        function redirectPage(){
            window.location = linkLocation;
        }
        });
</script>-->

<div class="col-md-12" style="margin-top: 170px;font-family: Fontin-Sans;">
	<center><b style="font-size: 50px;color: orange;">S</b><b style="font-size: 45px;color: blue;">e</b><b style="font-size: 45px;color: green;">a</b><b style="font-size: 45px;color: orange;">r</b><b style="font-size: 45px;color: red;">c</b><b style="font-size: 45px;color: blue;">h</b> &nbsp<b style="font-size: 45px;color: red;">D</b><b style="font-size: 45px;color: green;">a</b><b style="font-size: 45px;color: orange;">t</b><b style="font-size: 45px;color: green;">a</b><br> 
	<b style="font-family: open sans;font-size: 17px; 
	color: black; text-shadow: black 0.5em 1.7em 4.9em;">Calon Penerima Beasiswa Bidikmisi </b> <br><br>
				  <!-- Search Form -->
		<div class="col-md-6 col-md-offset-3">
         <form action="{{URL::to('result')}}">
        <!-- Search Field -->
            <div class="row">
                <div class="form-group">
                    <div class="input-group">   
                        <input class="form-control input-transparan" type="text" name="keyword" placeholder="Enter Registration Number" required/>
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
        </form>

			 </center> 
 </div>
</div>

<br><br><br><br><br>
<center><h6>Hy, {{Auth::user()->username}}</h6>
@endsection
