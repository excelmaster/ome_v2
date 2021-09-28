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
                <div class="col-sm-10 direct-chat-text bg-blue">check the vocabulary of the leter  <?php echo strtoupper($letter) ;  ?>  </div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('dict/' . $site); ?>"><img src="<?php echo base_url('public/img/'. $site . '/dict/ir_dict.gif') ?>"></a>
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
                <div class="col-sm-2">
                    <div class="card text-blue bg-transparent">
                        <h5 class="text-center"> <?php echo strtoupper($d['termino']) ; ?></h5>                        
                        <img src="<?php echo base_url('public/img/' . $site . '/dict/' . strtoupper( $letter) . '/' . str_replace(' ','_', $d['termino']) . '.png') ; ?>" alt="" class="img-fluid bg-transparent" style="width: 100%;">                        
                    </div>
                </div>
            <?php
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