<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new', $site);
$this->section('content');
?>

<div class="container">
    <div class="row">
        <p>
        <h1 class="display-1">
            Hola <?php print_r(ucwords($nombre['fullname'])) ?>
        </h1>
        </p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url('public/img/' . $site . '/certification/celebracion_' . $site . '.png'); ?>"
                alt="" class="img-fluid">
        </div>
        <div class="col-md-8 text-center" id="diplomatext">
            <p class="lead display-6">
                En Mundo Educativo Digital estamos orgullosos del esfuerzo y la dedicación que has demostrado a lo largo
                de este curso de inglés.
                Nos llena de emoción acompañarte en este logro, y estamos seguros de que este es solo el comienzo de un
                mundo lleno de nuevas oportunidades. ¡Felicidades!
            </p>
            <button onclick="downloadCertificate()" type="button" class="btn btn-primary">
                DESCARGA TU CERTIFICADO
            </button>
        </div>
    </div>
</div>

<script>
    function downloadCertificate() {   
        console.log("generate certificate ....");  
        window.location.href = "<?= base_url('/certification/generateCertificate') ?>"
    }
</script>

<?php
$this->endSection();
?>