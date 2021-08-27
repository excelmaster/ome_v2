<?php
$activos = 0;
$inactivos = 0;

//$this->extend('templates/template');
$this->extend('templates/template_scorm');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">

    <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> -->
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-xl-12">
        <?php
        //echo '<iframe src="' . base_url() . '/scorm/' . $site . '/m' . $course . '/l' . $lesson . '/' . $lesson . '_' . $activity . '" class="embed-responsive-item" style="width: 900px;height:550px;"></iframe>';
        echo 'dibuja sitio';
        return view('../m4/l1/1_3');
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