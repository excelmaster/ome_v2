<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Diploma</title>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/diploma.css'); ?>">
</head>

<body>
    <div class="diploma">
        <div class="columna-imagen">
            <img src="<?= base_url('public/img/teens/certification/diploma_teens_1177.png') ?>" alt="Imagen del diploma">
        </div>

        <div class="columna-texto">
            <h1>Diploma de Reconocimiento</h1>
            <p>Se otorga el presente diploma a:</p>
            <div class="nombre"><?= $nombreAlumno ?></div>
            <p>Por su destacado desempeño en el curso.</p>
            <p>Fecha: <?= date('d/m/Y') ?></p>
        </div>
    </div>
</body>

</html>