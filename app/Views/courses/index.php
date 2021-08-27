<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template', $site);
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-5">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.gif'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <div class="col-sm-10 direct-chat-text bg-blue">Escoge el mundo que quieres estudiar!</div>
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
            foreach ($courses as $c) {
            ?>
                <div class="col-sm-2">
                    <div class="card text-white bg-yellow">
                        <h5 class="text-center">World <?php echo $c['mundo']; ?></h5>
                        <a href="<?php echo base_url('lessons/' . $site . '/' . $c['id'] . '/' . $c['mundo']); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/courses/' . $c['img']); ?>" alt="" class="img-fluid" style="width: 100%;">
                        </a>
                    </div>
                </div>
            <?php
                $activos += 1;
            }
            $inactivos = $activos + 1;

            for ($i = $activos; $i < 8; $i++) { ?>
                <div class="col-sm-2">
                    <div class="card text-white bg-gray">
                        <h5 class="text-center">World <?php echo $inactivos; ?></h5>
                        <a href="#">
                            <img src="<?php echo base_url('public/img/' . $site . '/courses/' . $c['img']); ?>" alt="" class="card-fluid fichas" style="width:100%">
                        </a>
                    </div>
                </div>
            <?php
                $inactivos += 1;
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