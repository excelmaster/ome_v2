<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cursos - Mundo Educativo Digital</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php

									use PhpParser\Node\Expr\Isset_;

									echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/assets/css/intro.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/assets/css/login.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
	</script>
</head>

<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>');">
	<!-- video background -->
	<!-- <video class="login-video" playsinline autoplay muted loop poster="<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>" id="loginVideo">
		<source src="<?php echo base_url('public/img/mdl_img/login.mp4'); ?>" type="video/mp4" style="width:900px;heigth: 500px">
		Your browser does not support HTML5 video.
	</video> -->
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center align-content-center">
					<div class="d-flex justify-content-start align-content-center">
						<div style="weigth:180px;heigth: 150px;">
							<img src="<?php echo base_url('public/img/kids/template/logo_transparent.png'); ?>" alt="" class="">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 d-flex align-content-end justify-content-center">
					<div style="weigth:180px;heigth: 150px;">
						<img src="<?php echo base_url('public/img/mdl_img/quote_login.svg'); ?>" alt="" class="">
					</div>
				</div>
				<div class="col-md-6 d-flex align-content-start justify-content-center">
					<div class="login-box bluebox">
						<!-- /.login-logo -->
						<?php echo form_open('auth/login'); ?>
						<div class="card">
							<div class="card-body login-card-body bg-light">
								<p class="login-box-msg">DIGITE SUS DATOS DE INGRESO
								</p>
								<input id="ip" name="ip" type="text" class="login-box-msg" hidden></input>
								<div class="input-group mb-2">
									<input type="text" name="identity" id="identity" class="form-control" placeholder="Nombre de usuario" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-envelope"></span>
										</div>
									</div>
								</div>
								<div class="input-group mb-2">
									<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-lock"></span>
										</div>
									</div>
								</div>
								<div class="input-group mb-2">
									<select id="curso" name="curso" class="form-select form-select-sm" required>
										<option value="">Selecciona el curso</option>
										<option value="kids">English for kids</option>
										<option value="teens">English for teenagers</option>
									</select>
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
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<?php
		if (isset($message)) {
			if (substr($message, 0, 1) != "<") {
				echo '<div class="alert alert-primary" role="alert"><ul><li>' . $message . '</li></ul></div>';
			} else {
				echo  $message;
			};
		}
		?>
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
		$.get("https://ipinfo.io", function(response) {
			$('#ip').val(response.ip);
		}, "json")

		$('#tutorial').click();
	</script>
</body>

</html>
