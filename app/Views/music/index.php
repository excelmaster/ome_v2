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
            <div class="col-sm-5">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.png'); ?>" alt="">                
            </div>
            <div class="col-sm-5">
                <div class="direct-chat-msg">
                    <div class="direct-chat-text text-primary"><b> LISTEN ACTIVITY</b></div>
                </div>
                <div class="col-sm-10 direct-chat-text bg-blue">CHOOSE THE MUSIC THAT YOU WANT TO LISTEN!</div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('courses/' . $site ); ?>"><img src="<?php echo base_url('public/img/' . $site . '/dict/volver_mundos.gif'); ?>"></a>
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
    <div class="card-body bg-transparent">
        <div class="row">
            <?php
            foreach ($items as $c) {
            ?>
                <div class="col-sm-3">
                    <div class="card text-blue bg-transparent">
                        <h5 class="text-center"><?php echo $c['activityNumber'] .' - '. substr( $c['img_path'],0,30).'...'; ?></h5>
                        <form action="contenido.html" method="post"></form>
                        <?php
                        echo '<a type="button" class="btn bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top" href="'. base_url('musicontent/' . $site . '/' . $c['objectId'] . '/' . $c['lesson_id'] . '/' . $c['course_id'] . '/' . $c['lesson_id'] . '/' . $c['course_id'] . '/' . $c['tipo'] . '/' . $c['activityNumber']) .'/'.str_replace('.png','',$c['img_path']). '">';
                        ?>
                        <img src="<?php echo base_url('public/img/' . $site . '/music/cancion' . $c['activityNumber'] . '.png') ?>" alt="" class="img-fluid rounded">
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