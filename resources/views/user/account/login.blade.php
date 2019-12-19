 @extends('main')
 @section('content')
<p>home / account / login</p>
 	<div class="row" style="border: 1px solid #e3dfd3;width: 100%;padding: 20px">
 		<h3 style="font-weight: 600">ACCOUNT LOGIN</h3>
 	</div>
	
 
 <div class="row" style="width: 100%;">
		<div class="col-md-6" style="border: 1px solid #e3dfd3">
		
<div style="margin: 20px;">
	<h4>New Customer</h4>
	<h4><b>REGISTER NOW</b></h4>
	<p style="margin-top: 30px;">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
	<a href="/register"><button class="btn btn-primary">CONTINUE</button></a>
</div>

	</div>
	<div class="col-md-6" style="border: 1px solid #e3dfd3">
       <h4>Returning Customer</h4>
       <h4><b>I AM RETURNING CUSTOMER</b></h4>


       <form method="post" action="/loggin" style="margin-top: 20px;">
    @csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
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
  <button type="submit" class="btn btn-primary">LOGIN</button>
</form> 

	</div>
</div>
 @endsection