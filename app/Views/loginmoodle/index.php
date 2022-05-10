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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="row">
					<a href="www.mundoeducativodigital.com" target="_blank" class="text-white">
						<img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="" class="login-img">
					</a></h1>
				</div>
				<!-- /.login-logo -->
			</div>
			<div class="col-sm-8">
				<div class="row">
					<div class="card" id="logincard">
						<div class="card-body login-card-body">
							<p id="titulo" class="login-box-msg">Su usuario no se encuentra logueado en la plataforma de contenido, por favor diligencie de nuevo sus datos de acceso y luego dé clic en el botón "Acceder"</p>
							<p id="subtitulo" class="login-box-msg">A continuación dé clic en el botón ingresar a la plataforma :
								<div>
								<iframe  src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:400px;height: 350px;" id="ifrLogin" class=" d-flex justify-content-center"></iframe>
								</div>							
						</div>
						<!-- /.login-card-body -->
					</div>
					<div class="card" id="successcard">
						<div class="card-body login-card-body">
							<p id="titulo" class="login-box-msg">YA PUEDES DISFRUTAR DE NUESTRO CONTENIDO</p>
							<p id="subtitulo" class="login-box-msg">DÁ CLIC EN EL BOTÓN PARA CONTINUAR
								<div id="logincard">
									<a class="btn btn-primary btn-sm " href="<?php echo base_url('hub'); ?>" role="button"> Vamos al curso!</a>
								</div>							
						</div>
						<!-- /.login-card-body -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function hasActiveSession(user_id) {
			console.log("hasActiveSession : " + user_id);
			$.get("<?php echo base_url('loginmoodle/countsessions' ) ?>",
				function(data,status) {
					console.log('logueado en moodle: ' + data + '  status : ' +  status);
					console.log(data == "1");
					if(data == "1"){
						console.log("ok");
						$('#logincard').hide();
						$('#successcard').show();						
					} else {
						console.log("falso");
					}
				}
			)
		}
		var i = setInterval(function() {
			hasActiveSession(2);
		}, 4000);
		$('#successcard').hide();
	</script>
</body>

</html>