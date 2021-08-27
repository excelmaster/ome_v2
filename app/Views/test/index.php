<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template', $site);
$this->section('content');
echo ('<h1>hola '.$site.'</h1>');
//echo ('<h1>'.$id.'</h1>');
//<iframe src="<?php echo base_url('public/scorm_kids/m4/l1/1_3/index.html')  " style="width:700px;height: 400px;"></iframe>
?>

<iframe src="https://mdl.mundoeducativodigital.com/login/index.php" style="width:700px;height: 400px;"></iframe>

<?php
$this->endSection();
?>