<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Agil Gestión - Login</title>
<!-- Bootstrap Core CSS -->
  {!! IAStyle('ampleadmin/bootstrap/dist/css/bootstrap.min.css') !!}
<!-- animation CSS -->
  {!! IAStyle('ampleadmin/css/animate.css') !!}
<!-- Custom CSS -->
  {!! IAStyle('ampleadmin/css/style.css') !!}
<!-- color CSS -->
  {!! AGTheme('ampleadmin/css/colors/blue.css') !!}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal form-material" id="loginform" action="{{ route('iaserver.atlogin') }}" method="POST">
        <a href="javascript:void(0)" class="text-center db">{!! AGimg('ampleadmin/img/agilgestion-dark.png','dark-logo') !!}</a>
        
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="name" placeholder="Usuario">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" required="" placeholder="Contraseña">
          </div>
        </div>
        @if(Session::has('error'))
          <p class="text-danger">{{ Session::get('error') }}</p>
        @endif
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Recuerdame </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Olvidó su Clave?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Acceder</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>No tiene una cuenta? <a href="#" class="text-primary m-l-5"><b>Crear Cuenta</b></a></p>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="#">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recuperar Contraseña</h3>
            <p class="text-muted">Ingresa tu Email y las instrucciones de recuperación te serán enviadas! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Recuperar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
{!! IAScript('ampleadmin/plugins/jQuery/jquery-2.2.3.min.js') !!}
<!-- Bootstrap Core JavaScript -->
{!! IAScript('ampleadmin/bootstrap/dist/js/bootstrap.min.js') !!}
<!-- Menu Plugin JavaScript -->
{!! IAScript('ampleadmin/plugins/sidebar-nav/dist/sidebar-nav.min.js') !!}
{!! IAScript('ampleadmin/js/jquery.slimscroll.js') !!}
{!! IAScript('ampleadmin/js/waves.js') !!}
{!! IAScript('ampleadmin/js/custom.min.js') !!}
{!! IAScript('ampleadmin/plugins/styleswitcher/jQuery.style.switcher.js') !!}
</body>
</html>
