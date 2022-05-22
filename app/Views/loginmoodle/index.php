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

<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('public/img/mdl_img/fondo_hub.jpg'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="d-flex justify-content-center align-items-center p-2 bd-highlight">
					<div class="p-2 bd-highlight">
						<a href="www.mundoeducativodigital.com" target="_blank" class="text-white">
							<img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="" class="login-img">
						</a></h1>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex p-2 justify-content-center bd-highlight">
					<div class="p-2 bd-highlight">
						<img src="<?php echo base_url('public/img/mdl_img/titulo-mdlLogin.svg'); ?>" alt="" id="titulo">
					</div>
				</div>
				<div class="d-flex justify-content-center p-2 bd-highlight">
					<div class="p-2 bd-highlight">
						<div id="logincard">
							<iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:400px;height: 350px;" id="ifrLogin" class=" d-flex justify-content-center"></iframe>
						</div>
					</div>
				</div>
				<!-- <div class="d-flex justify-content-center p-2 bd-highlight">
					<div class="p-2 bd-highlight" id="successcard">
						<img src="<?php echo base_url('public/img/mdl_img/subtitulo-mdlLogin.svg'); ?>" alt="">
					</div>
				</div> -->
				<div class="d-flex justify-content-center p-2 bd-highlight">
					<div class="p-2 bd-highlight">
						<div>
							<img src="<?php echo base_url('public/img/mdl_img/subtitulo-mdlLogin.svg'); ?>" alt=""  id="texto_subtitulo">
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center p-2 bd-highlight">
					<div class="p-2 bd-highlight" >
						<div>
							<a class="btn btn-success btn-lg" href="<?php echo base_url('hub'); ?>" role="button" id="btn"> VAMOS AL CURSO!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1">				
			</div>
		</div>
	</div>
	</div>
	<script>
		function hasActiveSession(user_id) {
			console.log("hasActiveSession : " + user_id);
			$.get("<?php echo base_url('loginmoodle/countsessions') ?>",
				function(data, status) {
					console.log('logueado en moodle: ' + data + '  status : ' + status);
					console.log(data == "1");
					if (data == "1") {
						console.log("ok");
						$('#logincard').hide();
						$('#titulo').hide();						
						$('#successcard').show();
						$('#texto_subtitulo').show();
						$('#btn').show();
						



					} else {
						console.log("falso");
					}
				}
			)
		}
		var i = setInterval(function() {
			hasActiveSession(2);
		}, 2000);
		$('#successcard').hide();
		$('#btn').hide();
		$('#texto_subtitulo').hide();
	</script>
</body>

</html>