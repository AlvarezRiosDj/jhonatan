<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	{!!Html::style('assets/login/vendor/bootstrap/css/bootstrap.min.css')!!}
<!--===============================================================================================-->
	{!!Html::style('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}
<!--===============================================================================================-->
	{!!Html::style('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')!!}
<!--===============================================================================================-->
	{!!Html::style('assets/login/vendor/animate/animate.css')!!}
<!--===============================================================================================-->	
	{!!Html::style('assets/login/vendor/css-hamburgers/hamburgers.min.css')!!}
<!--===============================================================================================-->
	{!!Html::style('assets/login/vendor/select2/select2.min.css')!!}
<!--===============================================================================================-->
	{!!Html::style('assets/login/css/util.css')!!}
	{!!Html::style('assets/login/css/main.css')!!}
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				{!! Form::open(['url' => 'login','method'=>'post','class'=>'login100-form validate-form']) !!}
			
					<span class="login100-form-title p-b-55">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">					
						{!!Form::text('email',null,['class'=>'input100','placeholder'=>'Email'])!!}
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						{!!Form::password('password',['class'=>'input100','placeholder'=>'Password'])!!}						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					@if(session('status'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  	{!! session('status')!!}
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					@endif()

					<div class="contact100-form-checkbox m-l-4">
						{!!Form::checkbox('remember-me', 'value',null,['class'=>'input-checkbox100','id'=>'ckb1'])!!}
						{!!Form::label('ckb1', 'Remember me',['class'=>'label-checkbox100'])!!}
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						{!!Form::submit('LOGIN',['class'=>'login100-form-btn'])!!}
					</div>
			
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	{!!Html::script('assets/login/vendor/jquery/jquery-3.2.1.min.js')!!}
<!--===============================================================================================-->
	{!!Html::script('assets/login/vendor/bootstrap/js/popper.js')!!}
	{!!Html::script('assets/login/vendor/bootstrap/js/bootstrap.min.js')!!}	
<!--===============================================================================================-->
	{!!Html::script('assets/login/vendor/select2/select2.min.js')!!}
<!--===============================================================================================-->
	{!!Html::script('assets/login/js/main.js')!!}
</body>
</html>