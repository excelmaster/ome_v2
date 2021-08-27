<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-5">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.gif'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <div class="col-sm-10 direct-chat-text bg-blue">Escoge la lección que quieres estudiar!</div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/lessons/volver_mundos.gif'); ?>"></a>
            </div>
        </div>


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
            <?php
            foreach ($lessons as $c) {
            ?>
                <div class="col-sm-2">
                    <div class="card text-white bg-yellow">
                        <h5 class="text-center">LESSON <?php echo $c['lesson_number']; ?></h5>
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <a type="button" href="<?php echo base_url('activities/' . $site . '/' . $c['id'] . '/' . $course . '/' . $c['lesson_number'] . '/' . $courseId); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/lessons/' . $c['img_url']); ?>" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            <?php
                $activos += 1;
            }
            $inactivos = $activos + 1;
            ?>

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