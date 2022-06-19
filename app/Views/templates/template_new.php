<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OME courses</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/modules.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/grid.css'); ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</head>

<body class="grid-container"
    style="background-image: url(<?php echo base_url('public/img/' . $site . '/template/bcg_template.jpg'); ?>);">
    <!-- video background -->
    <?php
        if ($site == 'teens' || $site == 'kids') {
            echo '<video autoplay muted loop id="myVideo">';
            echo '<source src="' . base_url('public/img/' . $site . '/template/video_back.mp4') . '" type="video/mp4">';
            echo 'Your browser does not support HTML5 video.';
            echo '</video>';
        };
    ?>

    <div class="header">
        <div class="container-fluid">
            <div class="d-flex bd-highlight justify-content-between align-content-center mb-3">
                <div class="p-2 bd-highlight">
                    <a href="<?php echo base_url('courses/' . $site); ?>" >
                        <img src="<?php echo base_url('public/img/' . $site . '/template/texto_logo.png'); ?>"
                            alt="AdminLTE Logo" class="logo-header">
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="<?php echo base_url('auth/logout'); ?>" >
                        <img src="<?php echo base_url('public/img/mdl_img/logout.svg'); ?>"
                            alt="Logout" class="logo-header">
                    </a>
                </div>                
            </div>
        </div>
    </div>
    <div class="menu">
        <?php $clase = ($site == 'teens') ? 'rounded float-left' : ''; ?>
        <div class="mn_4">
            <a href="<?php echo base_url('pdfs/' . $site); ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_1.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_1">
            <a href="<?php echo base_url('dict/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_2.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_2">
            <a href="<?php echo base_url('music/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_3.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_3">
            <a href="<?php echo base_url('verbs/front/' . $site)  ?>" data-toggle="tooltip" data-placement="left"
                title="APRENDE ESTOS IMPORTANTES VERBOS">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_4.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_6">
            <a href="<?php echo base_url('tutorial/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_6.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
    </div>
    <div class="sidebar">
        <div class="sb_1">
            <a href="#" data-toggle="tooltip" data-placement="right"
                title="MUY PRONTO PODRÁS DESCARGAR TU CERTIFICADO DE PARTICIPACIÓN EN NUESTRO CURSO!">
                <img src="<?php echo base_url('public/img/' . $site . '/template/certificado.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="sb_2">
            <a href="https://api.whatsapp.com/send/?phone=573228315698&text=Quiero+informacion+sobre+las+clases+personalizadas&app_absent=0"
                target="_blank" data-toggle="tooltip" data-placement="left" title="CLASES PERSONALIZADAS !">
                <img src="<?php echo base_url('public/img/' . $site . '/template/clases.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="sb_3">
            <a href="<?php echo base_url('faq/' . $site); ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/faq.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="sb_4">
            <a href="https://api.whatsapp.com/send/?phone=573228315698&text=Necesito+soporte+de+la+plataforma&app_absent=0"
                target="blank_">
                <img src="<?php echo base_url('public/img/' . $site . '/template/support.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="sb_5 d-flex justify-content-center" onclick="sonido()" data-placement="left" data-toggle="tooltip">
            <img src="<?php echo base_url('public/img/' . $site . '/template/volume_off.svg'); ?>" id="volume"
                class="btn-sonido" style="width: 70px; height: 70px;  ">
            <audio id="myAudio" allowfullscreen>
                <source src="<?php echo base_url('public/sound/' . $site . '/sound_body_rdc.mp3'); ?>"
                    type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
        </div>
    </div>
    <div class="content">
        <div class="framezone">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper bg-transparent">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <img class="img-fluid" src="<?php //echo base_url('public/img/' . $site . '/template/bienvenidos.png'); 
                                                            ?>" alt="">
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main content  -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?php $this->renderSection('content'); 
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  /.content  -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <div class="navigation">
            <h6 hidden>nav</h6>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/assets/dist/js/demo.js'); ?>"></script>

    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "330px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0px";
        }
        var myAudio = document.getElementById("myAudio");
        var icono = document.getElementById("volume");

        function sonido() {
            let ck = document.cookie;

            if (localStorage.getItem("muted")) {
                icono.setAttribute("src",
                    "<?php echo base_url('public/img/' . $site . '/template/volume_off.svg'); ?>");
                myAudio.volume = .1;
                myAudio.play();
                myAudio.loop = false;
                localStorage.removeItem("muted");
            } else {
                localStorage.setItem("muted", "on");
                icono.setAttribute("src", "<?php echo base_url('public/img/' . $site . '/template/volume_on.svg'); ?>");
                myAudio.pause();
            }
        }

        var element = document.querySelector("body");
        //element.requestFullscreen();
    </script>

</body>

</html>