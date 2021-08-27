<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template');
$this->section('content');
$colvideo = array(
  'a' => 4,
  'b' => 5,
  'c' => 2,
  'd' => 1
);
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">
    <div class="row">
      <div class="col-md-<?php echo $colvideo['a'] ?>">
        <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.gif'); ?>" alt="" style="height: 70%;width: 70%">
      </div>
      <div class="col-md-<?php echo $colvideo['b'] ?>">
        <?php
        if ($source == 'video') {
          echo '<a href="#"><img class="bg-gradient-white" src="' . base_url('public/img/' . $site . '/content/videos.gif') . '"></a>';
        } else {
          echo '<img></img>';
        };
        ?>
      </div>
      <div class="col-md-<?php echo $colvideo['c'] ?>">
        <div class="col-sm-10 direct-chat-text bg-blue"><?php echo 'Lesson ' . $lesson . ' - Activity ' . $activity . ':: ' . $source; ?></div>
      </div>
      <div class="col-md-<?php echo $colvideo['d'] ?>">
        <a href="<?php echo base_url('activities/' . $site . '/' . $lessonId . '/' . $course . '/' . $lesson . '/' . $courseId); ?>"><img style="height: 80%;width: 80%" src="<?php echo base_url('public/img/' . $site . '/content/volver_actividad.gif'); ?>"></a>
      </div>
    </div>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-xl-12">
        <?php
        switch ($tipo) {
          case 'hvp':
            echo '<iframe class="embed-responsive-item" src="https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' . $objectId . '" width="838" height="503" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          case 'scorm':
            $ruta = 'public/scorm_' . $site . '/m' . $course . '/l' . $lesson . '/' . $lesson . '_' . $activity . '/index.html';
            echo '<iframe src="' . base_url($ruta) . '" class="embed-responsive-item" style="width: 900px;height:530px;"></iframe>';
            break;

          case 'resource':
            echo '<iframe src="'.$urlresource.'" width="838" height="503" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          default:
            # code...
            break;
        }
        ?>

      </div>
    </div>
  </div>

  <!-- /.card-body -->
  <div class="card-footer">
    <!-- Footer -->
  </div>

  <!-- /.card-footer-->
</div>

<!-- /.card -->


<?php
$this->endSection();
?>