@extends('main')
@section('content')
<h3>REGISTER ACCOUNT</h3>
<h5><b>Your Personal Details</b></h5>
<form method="POST" action="/register">

@csrf

<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Firstname:</p></div>
	<div class="col-md-6"><input type="text" class="form-control" name="name"></div>


	                                @if ($errors->has('name'))
                                    <span   role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif	 

</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Lastname:</p></div>
	<div class="col-md-6"><input type="text" class="form-control" name="lastname"></div>

	                                @if ($errors->has('lastname'))
                                    <span   role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif	 

</div>

<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Email:</p></div>
	<div class="col-md-6"><input type="text" class="form-control" name="email"></div>
	                                @if ($errors->has('email'))
                                    <span   role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>
<div class="row" style="width: 100%; padding: 20px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Phone:</p></div>
	<div class="col-md-6"><input type="text" class="form-control" name="phone"></div>


	                                @if ($errors->has('phone'))
                                    <span   role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif	 

</div>


<h5><b>Your Address</b></h5>


<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Name:</p></div>
	<div class="col-md-6"><input type="text" class="form-control"  ></div>
</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Name:</p></div>
	<div class="col-md-6"><input type="text" class="form-control"  ></div>
</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Name:</p></div>
	<div class="col-md-6"><input type="text" class="form-control"  ></div>
</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Name:</p></div>
	<div class="col-md-6"><input type="text" class="form-control"  ></div>
</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Name:</p></div>
	<div class="col-md-6"><input type="text" class="form-control"  ></div>
</div>

<h5><b>Your Password</b></h5>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Password:</p></div>

	<div class="col-md-6"><input id="password" type="password" class="form-control" name="password">
		                                @if ($errors->has('password'))
                                    <span  role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
	</div>
</div>
<div class="row" style="width: 100%; padding: 10px">
	<div class="col-md-1" style="text-align:left;"><p><span style="color:red">*</span>Conform:</p></div>

	<div class="col-md-6"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></div>

</div>
<div style="text-align: center;"><button type="submit" class="btn btn-primary">REGISTER</button></div>
</form>
@endsection