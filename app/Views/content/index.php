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
        <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.svg'); ?>" alt="" >
      </div>
      <!-- <div class="col-md-<?php echo $colvideo['b'] ?>">
        <?php
        if ($source == 'video') {
          echo '<a href="#"><img class="bg-gradient-white" src="' . base_url('public/img/' . $site . '/content/videos.gif') . '"></a>';
        } else {
          echo '<img></img>';
        };
        ?>
      </div> -->
      <div class="col-md-<?php echo $colvideo['c'] ?>" <?php if ($activity == '1') echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Previous<br> Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php $retVal = ($url_prev == '0') ? '#' : $url_prev;
                                                                                  echo $retVal; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_prev.png'); ?>" id="actv_prev" class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
      </div>
      <div class="col-md-<?php echo $colvideo['d'] ?>" <?php if ($url_next == '0') echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Next <br>Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php echo $url_next; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_next.png'); ?>" id="actv_next" class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
        <br><br>
      </div>
      <div class="col-md-<?php echo $colvideo['e'] ?>">
        <div class="col-sm-10 direct-chat-text bg-blue"><?php echo 'Lesson ' . $lesson . ' - Activity ' . $activity . ':: ' . $source; ?></div>
      </div>
      <div class="col-md-<?php echo $colvideo['f'] ?>">
        <a href="<?php echo base_url('activities/' . $site . '/' . $lessonId . '/' . $course . '/' . $lesson . '/' . $courseId); ?>"><img style="height: 700;width: 580" src="<?php echo base_url('public/img/' . $site . '/content/back_activities.svg'); ?>"></a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <!-- <div class="col-xl-1">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo base_url('public/img/teens/content/monstruo.jfif'); ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hola! Soy Paco</h5>
            <p class="card-text">Dá clic en el botón y te dire como hacer esta actividad</p> -->
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Muéstrame como hacer esta actividad
            </button>
          </div>
        </div>
      </div> -->
      <div class="col-xl-12">
        <?php
        switch ($tipo) {
          case 'hvp':
            echo '<iframe class="embed-responsive-item" src="https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' . $objectId . '" width="900px" height="600px" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          case 'scorm':
            $ruta = 'scorm/' . $site . '/' . $course . '/' . $lesson . '/'  . $activity . '/index.html';
            //$ruta = 'scorm/index/' . $site . '/m' . $course . '/l' . $lesson . '/' . $lesson . '_' . $activity;
            //echo $ruta;
            echo '<iframe src="' . base_url($ruta) . '" class="embed-responsive-item" style="width: 1000px;height:730px;"></iframe>';
            break;

          case 'resource':
            echo '<iframe class="embed-responsive-item" src="' . $urlresource . '" width="900px" height="580px" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
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
<!-- Modal  -->
<div class="modal fade" id="exampleModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo 'Lesson ' . $lesson . ' - Activity ' . $activity . ':: ' . $source; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo base_url('public/img/teens/content/monstruo.jfif'); ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">En esta actividad debes arrastrar las imágenes ubicadas en la izquierda hacia el campo de la derecha</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Vamos a hacelo!</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function (){
  alert("entra");
  $("#exampleModal").modal('show');
});


</script>


<?php
$this->endSection();
?>