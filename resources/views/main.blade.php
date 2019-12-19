 <!DOCTYPE html>
 <html>
 <head>
 	        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

 	<title>Prawashi Shopping Center</title>
 	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="{{asset('css/dashstyle.css') }}">
<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
<script type="text/javascript" src="{{asset('js/script.js') }}"></script>
 

 <style type="text/css">
   .fixed{
    position: fixed;
    top: 0px;
    z-index: 1;
   }
 </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".lb").click(function(){
        $(".lb").css("background-color", "#22226d");
        $(".lb").css("color", "white");

    $(this).css("background-color", "white" );
    $(this).css("color", "black" );
    $(this).css("botder", "none" );

  });
  $(".myclass").hover(function(){

    $(this).css("opacity","0.5");
    $(this).find('img').css('width','415px');
    $(this).find('img').css('height','415px');

    $(this).find('img').css('transition','0.5s ease');

    },function(){
     $(this).css("opacity","1");
    $(this).find('img').css('width','400px');
    $(this).find('img').css('height','400px');

  });
});
</script>

 </head>
 <body class="container;" style="height: 100%;width:100%;">
 
 <div  class="row"  style="width: 100%;margin-right: 0px;transition: top 0.3s;">
 	<div class="col-md-4" > 
 		<div class="row">
 			<div class="col-sm-4 top1"> 
 			<img class = "aa" src="{{asset('/image/logo.jpg') }}" height="70px">
 		    </div>
 		    <div class="col-sm-8 top1">
 		    	<h5 class="bb">Prawashi Shopping</h5>
 		    	<h4 class="bb">CENTER</h4>
                
 		    </div>
 		</div>
 		 
 	 

 	</div>
 	<div class="col-md-8" style="width: 100%;padding: 0px;margin:0px" >
 		<div class="top2">
 		<nav id="nav1">
      @guest
 		 <span class="sp">Welcome visitor !</span> 
       @else
       <span class="sp">Welcome  {{ Auth::user()->name }}</span>
       @endguest
 		<a href="#">My Account</a>
 		<a href="#">Blog</a>
 		<a href="#">Checkout</a>
 		<a href="#">Information</a>
    @guest
 		<a href="/login">Login</a>
    @else
 
  <a><form method="post" action="/logout"> @csrf
    <button type="submit" style="background-color: blue">out</button></form></a>
  		@endguest
 	    </nav>
 	    </div><br>
     	<div class="top3">
  <form style="width: 40%;position: relative;top:10px;">
  	   <i class="fas fa-search ee" aria-hidden="true" style="position: absolute;top:8px;left: 8px"></i>

  	   <input type="text" name="ss" class="form-control ee" style="padding-left: 30px" placeholder="search entire store here...">
 </form>
         <div style="border-radius: 5px; float: right;color:white;background-color: #1F72CE;padding:14px 16px 15px"><a href="#" style="color:white"><i class="fas fa-search"></i> Mycart</a></div>

         <div style="border-radius: 5px; float: right;color:white;background-color: #1F72CE;padding:14px 16px 15px; margin-right: 20px;"><a href="#" style="color:white"><i class="fas fa-search"></i>Wishlist</a></div>
 	    </div>

 </div>
</div>



@yield('content')
   </body>
 </html>