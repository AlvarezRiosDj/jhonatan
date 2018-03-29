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


  <style>
    
    .social {
  position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
  left: 0; /* Establecemos la barra en la izquierda */
  top: 200px; /* Bajamos la barra 200px de arriba a abajo */
  z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
  .social ul {
    list-style: none;
  }
 
  .social ul li a {
    display: inline-block;
    width: 40px;
    color:#fff;
    background: #000;
    padding: 10px 15px;
    text-decoration: none;
    -webkit-transition:all 500ms ease;
    -o-transition:all 500ms ease;
    transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
  }
 
  .social ul li .icon-facebook {background:#3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
  .social ul li .icon-twitter {background: #00abf0;}
  .social ul li .icon-googleplus {background: #d95232;}
  .social ul li .icon-pinterest {background: #ae181f;}
  .social ul li .icon-mail {background: #666666;}
 
  .social ul li a:hover {
    background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
    padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
  }



  </style>


</head>


<body class="body-wrapper  changeHeader ">
  <div class="main-wrapper">

    <!-- HEADER -->

    @include('public.es.layouts.navbartop')
    
    @yield('content')

<!-- FOOTER -->
  @include('public.es.layouts.footer')
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


<div class="social">
  <ul>
    <li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
    <li><a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
    <li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-googleplus"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-pinterest"><i class="fa fa-pinterest-p"></i></a></li>
    <li><a href="mailto:contacto@falconmasters.com" class="icon-mail"><i class="fa fa-envelope"></i></a></li>
  </ul>
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

