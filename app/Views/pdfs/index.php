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
                    <div class="direct-chat-text text-primary"><b> PDF ACTIVITY</b></div>
                </div>
                <div class="col-sm-10 direct-chat-text bg-blue">CHOOSE THE COLOR ACTIVITY THAT YOU WANT TO DO!</div>
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
                <div class="col-sm-2">
                    <div class="card text-blue bg-transparent">
                        <h5 class="text-center">Activity <?php echo $c['activityNumber']; ?></h5>
                        <img class="card-img-top bg-transparent" src="holder.js/100px180/" alt="">
                        <form action="contenido.html" method="post"></form>
                        <?php
                        echo '<a type="button" class="btn bg-transparent" href="'. base_url('pdfcontent/' . $site . '/' . $c['objectId'] . '/' . $c['lessonId'] . '/' . $c['course_id'] . '/' . $c['lesson_id'] . '/' . $c['course_id'] . '/' . $c['tipo'] . '/' . $c['activityNumber']) .'/'.str_replace('.png','',$c['img_path']). '">';
                        ?>
                        <img src="<?php echo base_url('public/img/' . $site . '/pdf/pdf' . $c['activityNumber'] . '.png') ?>" alt="" class="img-fluid rounded">
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