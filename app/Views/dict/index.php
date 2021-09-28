<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new', $site);
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-12">
            <div class="col-sm-5">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.gif'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <div class="col-sm-10 direct-chat-text bg-blue">Choose the letter that you want to meet!</div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/dict/volver_mundos.gif') ?>"></a>
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
            foreach ($dicts as $d) {
            ?>
                <div class="col-md-2">
                    <div class="card text-white bg-yellow mb-4">
                        <h5 class="text-center"> <?php echo strtoupper($d['letra']); ?></h5>
                        <a href="<?php echo base_url('letter/' . $site . '/' . $d['letra']); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/dict/' . strtoupper($d['letra']) . '/letra_' . $d['letra'] . '.png'); ?>" alt="" class="img-fluid" style="width: 100%;">
                        </a>
                    </div>
                </div>
            <?php
                $activos += 1;
            }
            ?>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <!-- //Footer -->
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
<?php
$this->endSection();
?>