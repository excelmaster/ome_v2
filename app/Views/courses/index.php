<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new', $site);
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-4">
                <img class="img-fluid img-bnvd"
                    src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.svg'); ?>" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row" hidden>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary"><i>jshdf</i></button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                    </div>
                </div>
                <div class="row" hidden>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-secondary" disabled>3</button>
                        <button type="button" class="btn btn-secondary" disabled>4</button>
                        <button type="button" class="btn btn-secondary" disabled>5</button>
                        <button type="button" class="btn btn-secondary" disabled>6</button>
                        <button type="button" class="btn btn-secondary" disabled>7</button>
                        <button type="button" class="btn btn-secondary" disabled>8</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <img class="img-fluid img-bnvd"
                    src="<?php echo base_url('public/img/' . $site . '/template/mensaje_mundo.svg'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="content-container">
            <?php
            foreach ($courses as $c) {
                ?>
                <div class="col-sm-2 mundo-card">                    
                    <div class="mundo-card text-blue bg-transparent">
                        <a href="<?php echo base_url('lessons/' . $site . '/' . $c['id'] . '/' . $c['mundo']); ?>">
                            <h5 class="text-center"><?php echo $c['module']; ?> </h5>
                        </a>
                        <div class="row">
                            <?php
                            $nota = round($c['avance'], 0);
                            /*
                            if ($c['notaActual'] == 0 || $c['notaActual'] == null) {
                                $nota = 0;
                            } else {
                                $nota = round(($c['notaActual'] / $c['notaTotal']) * 100, 0);
                            }
                            */
                            ?>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-ligth">
                                    
                                    <?php 
                                        echo $c['isExam']==0 ? 'Avance:'.$nota.'%' : 'puntaje: '. $c['puntaje'];                                   
                                    ?>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            style="width:<?php echo $nota; ?>%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <a href="<?php echo base_url('lessons/' . $site . '/' . $c['id'] . '/' . $c['mundo']); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/courses/mundos' . $c['mundo'] . '.png'); ?>"
                                alt="" class="img-fluid img-mundos" style="width: 60%;">
                        </a>
                    </div>
                </div>
                <?php
                $activos += 1;
            }
            $inactivos = $activos + 1;

            for ($i = $activos; $i < count($courses) ; $i++) { ?>
                <div class="col-sm-3">
                    <div class="card text-blue bg-transparent">
                        <h5 class="text-center">World
                            <?php echo $inactivos; ?>
                        </h5>
                        <a href="#">
                            <img src="<?php echo base_url('public/img/' . $site . '/courses/mundos' . ($i + 1) . '.png'); ?>"
                                alt="" class="card-fluid fichas img-mundos" style="width:100%">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
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