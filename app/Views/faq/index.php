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
                <h3 class="bg bg-blue">PREGUNTAS FRECUENTES</h3>
            </div>
            <div class="col-sm-5">
                <div class="col-sm-10 direct-chat-text bg-blue">Dé clic en la pregunta para ver la respuesta!</div>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/dict/volver_mundos.gif'); ?>"></a>
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
            <div class="col-12" id="accordion">
                <?php
                foreach ($faqs as $f) {
                ?>
                    <div class="card card-primary card-outline bg-gray">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse<?php echo $f['order']; ?>" aria-expanded="false">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?php echo $f['order'] . '.  ' . $f['question']; ?>
                                </h4>
                            </div>
                        </a>
                        <div id="collapse<?php echo $f['order']; ?>" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body bg-white">
                                <?php echo $f['answer']; ?>
                                <div class="container-fluid">
                                    <img src="<?php echo base_url('public/img/' . $site . '/faq/faq_'.$f['order'].'.png'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <!-- //Footer -->
        <div class="col-12 mt-3 text-center">
            <p class="lead bg-white">
                <a href="https://api.whatsapp.com/send/?phone=3228315698&text=Necesito+soporte+de+la+plataforma&app_absent=0" target="_blank">Contáctanos</a>,
                si no has encontrado la respuesta correcta o tienes otra pregunta?<br>
            </p>
        </div>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
<?php
$this->endSection();
?>