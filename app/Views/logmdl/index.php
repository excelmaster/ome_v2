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
				<div class="row align-content-center">
					<div class="card">
						<div class="card-body login-card-body">
							<p class="login-box-msg">Su usuario no se encuentra logueado en la plataforma de contenido, por favor diligencie de nuevo sus datos de acceso y luego dé clic en el botón "Acceder"</p>
							<p class="login-box-msg">A continuación dé clic en el botón ingresar a la plataforma"</p>
							<iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:400px;height: 300px;" id="ifrLogin" class="float-center"></iframe>
						</div>
						<!-- /.login-card-body -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function checkCookies() {
			var cookies = document.cookie.split(';');
			var ret = '';
			/* for (var i= 1; i<= cookies.length; i++){
				ret += i + ' - ' + cookies[i-1] + '<br>';
				alert("cookies : " + cookies[i+1]);
			}
			var_dump(cookies); */
			console.log(cookies[1]);
		}

		function getIframeContent(frameId) {
			var frameObj =
				document.getElementById(frameId);

			var frameContent = frameObj.
			contentWindow.document.body.innerHTML;

			alert("frame content : " + frameContent);
		}

		

		var i = setInterval(function() {
			getIframeContent('ifrLogin');
		}, 2000);
	</script>
</body>

</html>