<!DOCTYPE html>
<html>
<head>

  <!-- Page Title -->
  <title>@yield('page-title')</title>


  <!-- FavIcon Link -->
  <link rel="icon" type="image/ico" href="{{url('favicon.ico')}}">


  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('creatu/bootstrap/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('creatu/plugins/datatables/dataTables.bootstrap.css')}}">

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('creatu/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('creatu/plugins/datepicker/datepicker3.css')}}">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('creatu/plugins/iCheck/all.css')}}">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('creatu/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">

  <!-- style -->
  <link rel="stylesheet" href="{{url('creatu/css/style.css')}}">

  <!-- component -->
  <link rel="stylesheet" href="{{url('creatu/css/component.css')}}">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('creatu/plugins/timepicker/bootstrap-timepicker.min.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('creatu/plugins/select2/select2.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('creatu/dist/css/AdminLTE.min.css')}}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{url('creatu/dist/css/skins/_all-skins.min.css')}}">

   <!-- iCheck -->
   <link rel="stylesheet" href="{{url('creatu/plugins/iCheck/flat/blue.css')}}">

   <!-- Morris chart -->
   <link rel="stylesheet" href="{{url('creatu/plugins/morris/morris.css')}}">

   <!-- jvectormap -->
   <link rel="stylesheet" href="{{url('creatu/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">

   <!-- Date Picker -->
   <link rel="stylesheet" href="{{url('creatu/plugins/datepicker/datepicker3.css')}}">

   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{url('creatu/plugins/daterangepicker/daterangepicker.css')}}">

   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{url('creatu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

   <!-- jQuery 2.2.3 -->
   <script src="{{url('creatu/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

   <!-- jQuery UI 1.11.4 -->
   <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

</head>
<body>
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Sasto</b>BUS</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>

		<form action="../../index2.html" method="post">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> Remember Me
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		</form>



		<a href="register.html" class="text-center">Register a new membership</a>

	</div>
	<!-- /.login-box-body -->
</div>
</body>
</html>

