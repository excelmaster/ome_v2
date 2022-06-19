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
            <div class="col-sm-4">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.svg'); ?>" alt="">
            </div>
            <div class="col-sm-2">
                <div class="col-sm-10 direct-chat-text bg-blue">
                    <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/lessons/mensaje_lecciones_kids.svg'); ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/lessons/back_button.svg'); ?>"></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <?php
            foreach ($lessons as $c) {
            ?>
                <div class="col-sm-3">
                    <!-- <div class="card text-blue bg-transparent">
                        <h5 class="text-center text-blue">LESSON </h5>
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <a type="button" href="<?php echo base_url('activities/' . $site . '/' . $c['id'] . '/' . $course . '/' . $c['lesson_number'] . '/' . $courseId); ?>">
                            <picture src="<?php echo base_url('public/img/' . $site . '/lessons/' . $c['img_url']); ?>" alt="" class="img-fluid rounded"></picture>
                        </a>
                    </div> -->
                    <div style="padding:20px"> 
                        <img src="<?php echo base_url('public/img/' . $site . '/lessons/title_lessons.png'); ?>" style="width:100px; height: 35px;">                       
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