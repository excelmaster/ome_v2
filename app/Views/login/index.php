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
	<link rel="stylesheet" href="<?php echo base_url('public/assets/css/intro.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>');">
	<!-- video background -->
	<!-- <video class="login-video" playsinline autoplay muted loop poster= "<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>" id="loginVideo">
		<source src="<?php echo base_url('public/img/mdl_img/login.mp4'); ?>" type="video/mp4" style="width:900px;heigth: 500px">
		Your browser does not support HTML5 video.
	</video> -->
	<div class="login-box">
		<div class="login-logo">
			<a href="www.mundoeducativodigital.com" target="_blank" class="text-white">
				<img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="" class="login-img">
			</a></h1>
		</div>
		<!-- /.login-logo -->
		<?php echo form_open('/users'); ?>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">DIGITE SUS DATOS DE INGRESO
				</p>
				<div class="input-group mb-5">
					<input type="text" name="username" id="username" class="form-control" placeholder="Nobre de usuario">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-5">
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<!-- /.col -->
					<div class="col-6">
						<button type="submit" class="btn btn-primary btn-block" id="loginbtn">INGRESAR</button>
					</div>
					<!-- /.col -->
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<div class="row">
		<?php
		if (isset($validation)) : ?>
			<div class="col-xl-12">
				<div class="alert alert-info" role="alert">					
					<div>
						<?= $validation->listErrors() ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<!-- <iframe src="https://omedev.mundoeducativodigital.com/content/kids/223/1/1/1/5/hvp/4/memoria" style="width:700px;height: 400px;" id="ifrLogin"></iframe> -->
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
			var mdlframe = document.getElementById("ifrLogin").textContent;
			alert(mdlframe.toString());
			/*var token = mdlframe.ContentWindow.document.getElementByName('logintoken'); */


			/* var mdlusername = $("#ifrLogin").contents().find('logintoken');
			var token = mdlframe.
			var token = mdlframe.contentWindow.document.getElementByName('logintoken').val();
			alert('token'  + token);
			var txtUsername = $('#username').val();
			alert(txtUsername);
			mdlusername.text(txtUsername); */
		}
	</script>
</body>

</html>