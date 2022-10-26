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
			<div id="login" class="row">
				<div class="col-md-6 d-flex align-content-end justify-content-center">
					<div id="quote_loginmdl" style="weigth:180px;heigth: 150px;">
						<img src="<?php echo base_url('public/img/mdl_img/quote_loginmdl.svg'); ?>" alt="" class="">
					</div>
				</div>
				<div class="col-md-6 d-flex justify-content-center align-content-start">
					<div id="logincard">
						<iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:400px;height: 350px;" id="ifrLogin" class=" d-flex justify-content-center"></iframe>
					</div>
				</div>
				<div class="col-md-12 d-flex justify-content-center align-content-start">
					<div id="confirmation" style="weigth:180px;heigth: 150px;">
						<a href="<?php echo base_url('courses/'. $_SESSION['course']); ?>"><img src="<?php echo base_url('public/img/mdl_img/banner_loginmdl.png'); ?>" alt="" class=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
		function hasActiveSession(user_id) {
			console.log("hasActiveSession : " + user_id);
			$.get("<?php echo base_url('loginmoodle/countSessions') ?>",
				function(data, status) {
					console.log('logueado en moodle: ' + data + '  status : ' + status);
					console.log(data == "1");
					if (data == "1") {
						console.log("ok");
						/*
						$('#logincard').hide();
						$('#quote_loginmdl').hide();
						$('#confirmation').show();
						$('#btn').show();
						*/						
						var ruta = window.location.origin + '/courses/' + '<?php echo $_SESSION['course']; ?>';
						console.log('ruta: ' + ruta);						
						$(window).attr('location',ruta );
					} else {
						console.log("falsso");
					}
				}
			)
		}
		var i = setInterval(function() {
			hasActiveSession(2);
		}, 2000);
		$('#confirmation').hide();
	</script>
</body>

</html>