<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-3">
                <img class="img-fluid"
                    src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.svg'); ?>"
                    alt="">
            </div>
            <div class="col-sm-6">
                <div class="col-sm-10 direct-chat-text bg-blue">
                    <img class="img-fluid"
                        src="<?php echo base_url('public/img/' . $site . '/lessons/mensaje_lecciones_' . $site . '_' . $course . '.svg'); ?>"
                        alt="">
                </div>
            </div>
            <div class="col-sm-3">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img
                        src="<?php echo base_url('public/img/' . $site . '/lessons/back_button.svg'); ?>"></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <?php
            foreach ($lessons as $c) {
                ?>
                <div class="col-sm-3">
                    <div class="lesson-card" style="padding:20px">
                        <p class="h4"><?php echo $c['descripcion']; ?></p>
                        <?php
                        /*
                        $nota = 0;
                        if ($c['notaActual'] == 0 || $c['notaActual'] == null) {
                            $nota = 0;
                        } else {
                            $nota = round(($c['notaActual'] / $c['notaTotal']) * 100, 0);
                        }
                        */
                        ?>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-ligth">
                                    Avance: <?php echo round($c['avance'], 0); ?>%
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            style="width:<?php echo $c['avance']; ?>%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <a type="button"
                            href="<?php echo base_url('activities/' . $site . '/' . $c['id'] . '/' . $course . '/' . $c['lesson_number'] . '/' . $courseId); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/lessons/' . $c['img_url']); ?>" alt=""
                                class="img-fluid rounded">
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