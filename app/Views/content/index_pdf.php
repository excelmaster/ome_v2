<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new');
$this->section('content');
$colvideo = array(
  'a' => 4,
  'b' => 1,
  'c' => 2,
  'd' => 1,
  'e' => 2,
  'f' => 1
);
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">
    <div class="row">
      <div class="col-md-<?php echo $colvideo['a'] ?>">
        <img class="img-fluid"
          src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.svg'); ?>" alt="">
      </div>
      <!-- <div class="col-md-<?php echo $colvideo['b'] ?>">
        <?php
        if ($source == 'video') {
          echo '<a href="#"><img class="bg-gradient-white" src="' . base_url('public/img/' . $site . '/content/videos.gif') . '"></a>';
        } else {
          echo '<img></img>';
        }
        ;
        ?>
      </div> -->
      <div class="col-md-<?php echo $colvideo['c'] ?>" <?php if ($activity == '1')
           echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Previous<br> Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php $retVal = ($url_prev == '0') ? '#' : $url_prev;
          echo $retVal; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_prev.png'); ?>" id="actv_prev"
              class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
      </div>
      <div class="col-md-<?php echo $colvideo['d'] ?>" <?php if ($url_next == '0')
           echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Next <br>Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php echo $url_next; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_next.png'); ?>" id="actv_next"
              class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
        <br><br>
      </div>
      <div class="col-md-<?php echo $colvideo['e'] ?>">
        <div class="col-sm-10 direct-chat-text bg-blue">
          <?php echo 'Lesson ' . $lesson . ' - Activity ' . $activity . ':: <b class="h4">' . $descripcion . '</b>'; ?>
        </div>
      </div>
      <div class="col-md-<?php echo $colvideo['f'] ?>">
        <a
          href="<?php echo base_url('activities/' . $site . '/' . $lessonId . '/' . $course . '/' . $lesson . '/' . $courseId); ?>"><img
            src="<?php echo base_url('public/img/' . $site . '/content/back_activities.svg'); ?>"></a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="display-6">Carga de pdf's</h1>
        <h1 class="display-4">World <?php echo $lesson ?></h1>
        <p class="lead">
          Carga los archivos pdf que desarrollaste durante el World <?php echo $lesson ?>
        </p>
      </div>
      <div class="col-xl-6">
        <form action="<?= base_url('upload/do_upload'); ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="" class="form-label">Escoger el archivo</label>
            <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId"
              accept=".pdf,.zip,.rar,.7z" />
            <div id="fileHelpId" class="form-text">Puedes cargar archivos en formato pdf, rar, zip y 7z</div>
            <div id="fileHelpId" class="form-text">Tamaño máximo permitido: 1 Mb</div>
            <input name="" id="" class="btn btn-success" type="button" value="Cargar archivos" />
        </form>
      </div>
    </div>
  </div>

  <!-- /.card-body -->
  <div class="card-footer">
    <!-- Footer -->
  </div>

  <!-- /.card-footer-->
</div>

<?php
$this->endSection();
?>