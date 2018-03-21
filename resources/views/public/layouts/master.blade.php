<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Star Travel - Tour Booking Theme</title>

  <!-- PLUGINS CSS STYLE -->

  {!!Html::style('assets/public/plugins/jquery-ui/jquery-ui.min.css')!!}
  {!!Html::style('assets/public/plugins/bootstrap/css/bootstrap.min.css')!!}
  {!!Html::style('assets/public/plugins/font-awesome/css/font-awesome.min.css')!!}
  {!!Html::style('assets/public/plugins/selectbox/select_option1.css')!!}
  {!!Html::style('assets/public/plugins/datepicker/datepicker.css')!!}
  {!!Html::style('assets/public/plugins/isotope/jquery.fancybox.css')!!}
  {!!Html::style('assets/public/plugins/isotope/isotope.css')!!}
 
  <!-- REVOLUTION SLIDER -->
  {!!Html::style('assets/public/plugins/revolution/css/settings.css')!!}
  {!!Html::style('assets/public/plugins/revolution/css/layers.css')!!}
	{!!Html::style('assets/public/plugins/revolution/css/navigation.css')!!}



  <!-- GOOGLE FONT -->
  {!!Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,600,700')!!}


  <!-- CUSTOM CSS -->
  {!!Html::style('assets/public/css/style.css')!!}
  {!!Html::style('assets/public/css/colors/default.css')!!}
  

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/png" href="assets/public/img/favicon.png"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<body class="body-wrapper  changeHeader ">
  <div class="main-wrapper">

    <!-- HEADER -->

    @include('public.layouts.navbartop')
    
    @yield('content')

<!-- FOOTER -->
  @include('public.layouts.footer')
</div>

<!-- Signup Modal -->
<div class="modal fade signupLoging" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create your account</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-group">
            <input type="text" class="form-control bg-ash" id="exampleInputEmail1" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to the terms of use and privacy.
            </label>
          </div>
          <button type="submit" class="btn btn-default">Login</button>
        </form>
        <div class="or">
          or
        </div>
        <a class="btn btn-default btnSocial"  href="#">Log in with facebook</a>
      </div>

      <div class="modal-footer">
          <div class="dontHaveAccount">
            <p>Don’t have an Account?<a href=""> Sign up</a></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade signupLoging" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log in to your account</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-group">
            <input type="email" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
            <a class="forgotPass clerfix" href="">Fogot Password?</a>
          </div>
          <button type="submit" class="btn btn-default">Login</button>
        </form>
        <div class="or">
          or
        </div>
        <a class="btn btn-default btnSocial"  href="#">Log in with facebook</a>
      </div>

      <div class="modal-footer">
          <div class="dontHaveAccount">
            <p>Don’t have an Account?<a href=""> Sign up</a></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- JAVASCRIPTS -->
{!!Html::script('assets/public/plugins/jquery/jquery-2.2.4.min.js')!!}
{!!Html::script('assets/public/plugins/jquery/jquery-migrate-1.2.1.min.js')!!}
{!!Html::script('assets/public/plugins/jquery-ui/jquery-ui.min.js')!!}
{!!Html::script('assets/public/plugins/bootstrap/js/bootstrap.min.js')!!}
{!!Html::script('assets/public/plugins/revolution/js/jquery.themepunch.tools.min.js')!!}
{!!Html::script('assets/public/plugins/revolution/js/jquery.themepunch.revolution.min.js')!!}
{!!Html::script('assets/public/plugins/selectbox/jquery.selectbox-0.1.3.min.js')!!}
{!!Html::script('assets/public/plugins/datepicker/bootstrap-datepicker.js')!!}
{!!Html::script('assets/public/plugins/jquery/waypoints.min.js')!!}
{!!Html::script('assets/public/plugins/counter-up/jquery.counterup.min.js')!!}
{!!Html::script('assets/public/plugins/isotope/isotope.min.js')!!}
{!!Html::script('assets/public/plugins/isotope/jquery.fancybox.pack.js')!!}
{!!Html::script('assets/public/plugins/isotope/isotope-triger.js')!!}
{!!Html::script('assets/public/plugins/countdown/jquery.syotimer.js')!!}
{!!Html::script('assets/public/plugins/slick/slick.min.js')!!}
{!!Html::script('assets/public/js/custom.js')!!}

</body>

</html>

