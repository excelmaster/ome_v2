<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/adminlte.min.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>');">
	<div class="login-box">
		<div class="login-logo">
			<a href="www.mundoeducativodigital.com" target="_blank" class="text-white">
				<h1><b>MUNDO EDUCATIVO </b>DIGITAL
			</a></h1>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">INGRESE PARA EMPEZAR SU SESIÓN</p>
				<div class="input-group mb-3">
					<input type="text" name="username" id="username" class="form-control" placeholder="Nobre de usuario">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="button" onclick="updateIframe()" class="btn btn-primary btn-block" id="loginbtn">INGRESAR</button>
					</div>
					<!-- /.col -->
				</div>
				
				<div class="social-auth-links text-center mb-3">
					<img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="" style="height: 50%;width: 50%">
				</div>
				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
				</p>
				<p class="mb-0">
					<a href="register.html" class="text-center">Register a new membership</a>
				</p> -->
			</div>
			<!-- /.login-card-body -->
		</div>		
	</div>
	<iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:700px;height: 400px;" id="ifrLogin"></iframe>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('public/assets/dist/js/adminlte.min.js'); ?>"></script>
	<script>
		function updateIframe() {
			alert('boton clickeado');
			var mdlusername = $("#ifrLogin").contents().find('#username');
			console.log(mdlusername);
			var txtUsername = $('#username').val();
			alert(txtUsername);
			mdlusername.text(txtUsername);
		}
	</script>
</body>

</html>