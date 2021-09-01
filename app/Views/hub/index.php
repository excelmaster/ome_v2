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
		<div class="card">
			<div class="card-body login-card-body">
				<div class="row">
					<div class="col-6">
					</div>
					<!-- /.col -->
					<div class="col-6">
						<h1>hello, <?= session()->get('idmdl') ?></h1>
						<h1>id : <?= session()->get('sid') ?></h1>
						<a href="users/logout">salir >></a>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- <iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:700px;height: 400px;" id="ifrLogin"></iframe> -->
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