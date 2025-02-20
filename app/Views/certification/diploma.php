<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .diploma-container {
        	display: flex;
        	width: 900px;
        	height: 600px;
        	padding: 4px;
       	 	border: 10px solid #c0a060;
        	text-align: center;
        	background: white;
        	flex-direction: column;
        	flex-wrap: wrap;
        	align-content: center;
        	justify-content: space-evenly;
        	align-items: center;
		}
        .logo, .firma {
            max-width: 150px;
        }
        .diploma-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .diploma-text {
            font-size: 1.2rem;
        }
		.alumno-text {
            font-size: 1.1rem;
        }
        .gold-border {
            border: 2px solid #c0a060;
            padding: 0px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="diploma-container shadow-lg">
        <div class="row align-items-center">
            <!-- Columna izquierda (Logo) -->
            <div class="col-3 text-center">
                <img src="<?php echo base_url('public/img/teens/template/LOGO.jpg') ?>" alt="Logo Institución" class="img-fluid logo">
            </div>
            
            <!-- Columna central (Texto) -->
            <div class="col-6">
                <h1 class="diploma-title text-uppercase">Certificate Of Achievement</h1>
                <p class="diploma-text mt-3">
                    This Certificate Is Proudly Presented to </p>
    				<h2><strong><?php echo strtoupper($nombreAlumno[0]['fullname']) ?></strong></h2>  
                    <p>For successfully completing all activities and 
    				passing the exams of the English Course:</p>
    				<h2><Strong class="diploma/text">English World For <?php echo ucwords($_SESSION['course']) ?></strong></h2>
                </p>
                <p class="diploma-text">Certification Date: <strong><?php echo $diplomaDate->examdate ?></strong></p>
            </div>
            
            <!-- Columna derecha (Imagen secundaria) -->
            <div class="col-3 text-center">
                <img src="<?php echo base_url('public/img/teens/template/firma.png') ?>" alt="Firma" class="img-fluid firma">
                <p class="diploma-text mt-3"><b>Omar Riaño</b></p>
                <p class="diploma-text mt-3"><b>Educational manager</b></p>                
            </div>
        </div>
    </div>

</body>
</html>