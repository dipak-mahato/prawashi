<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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

</head>
<body>
<div class="container-fluid">
  <div class="row" >
 	<div class="col-md-3"></div>
 	<div class="col-md-6" style="background-color: grey;margin-top: 20px; padding: 20px; color:white">

 		<h3 style="text-align: center">ADMIN LOGIN</h3>
		<form action="/aadmin" method="post">
			@csrf
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		    @if ($errors->has('email'))
                                    <span  role="alert">
                                        <strong  >{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="password">
		                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong >{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		  </div>
		  <div class="form-group form-check">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox"> Remember me
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
		</form>
 	</div>
 	<div class="col-md-3"></div>
 </div>
</div>
</body>
</html>
 