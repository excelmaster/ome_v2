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
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/legal.css'); ?>">
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
                    <a href="<?php echo base_url('courses/' . $site); ?>">
                        <img src="<?php echo base_url('public/img/' . $site . '/template/texto_logo.png'); ?>"
                            alt="AdminLTE Logo" class="logo-header">
                    </a>
                </div>

                <div class="p-2 bd-highlight">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Usuario:
                        <?php echo $_SESSION['username'] ?>
                    </button>
                    <a href="<?php echo base_url('auth/logout'); ?>">
                        <img src="<?php echo base_url('public/img/mdl_img/logout.svg'); ?>" alt="Logout"
                            class="logo-header">
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
        <div class="mn_6" id="tutorialButton">
            <!-- <a href="<?php echo base_url('tutorial/' . $site);  ?>"> -->
            <a href="#">
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
            <audio id="AudioToolTip" allowfullscreen>
                <source src="<?php echo base_url('public/sound/' . $site . '/podcast/'.$_SESSION['podcastName']); ?>"
                    type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
        </div>
    </div>
    <div class="content" id="content">
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

    <!-- Modal -->
    <div class="modal fade" id="tourVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <p id="userVisits" hidden>
                    <?php echo $_SESSION['tourVisits'] ?>
                </p>
                <div class="modal-body">
                    <p class="h5">Antes de empezar mira este importante video !</p>
                    <button id="closeModal" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/qsTz8_OV0KQ"
                            title="Mundo Educativo Digital" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal ISBN-->
    <div class="modal fade" id="modalISBN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="display: flex;">
                <div class="modal-body">
                    <p class="h5">Bienvenido a nuestra plataforma !</p>
                    <button id="closeModal" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo base_url('/public/img/kids/template/logo_transparent.png'); ?>" style="height: 150px;width: 150px;">
                        <h6>www.mundoeducativodigital.com</h6>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="card-title">CURSO DE INGLÉS BÁSICO INTERMEDIO</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">"Plataforma digital" - Obra de
                            carácter
                            científico y cultural"</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table table-light table-responsive">
                            <thead class="thead-light">
                                <tr>
                                    <th>                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-4">
                                                <h6>Dirección General</h6>
                                            </dt>
                                            <dd class="col-sm-8">
                                                <h6>Francisco Javier Riaño Bustos</h6>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-4">
                                                <h6>Director Editorial y Coordinación Digital</h6>
                                            </dt>
                                            <dd class="col-sm-8">
                                                <h6>Omar Ivan Riaño Rodríguez</h6>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-3">
                                                <h6>Diseño y diagramación</h6>
                                            </dt>
                                            <dd class="col-sm-3">
                                                <h6>Humberto Fierro Prieto</h6>
                                            </dd>
                                            <dd class="col-sm-6">
                                                <small class="text-muted">Consultor TI y Software</small>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-3">
                                                <h6>Textos</h6>
                                            </dt>
                                            <dd class="col-sm-3">
                                                <h6>Jhoana Páez</h6>
                                            </dd>
                                            <dd class="col-sm-6">
                                                <small class="text-muted">Licenciada en Idiomas</small>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-3">
                                                <h6>Ilustraciones</h6>
                                            </dt>
                                            <dd class="col-sm-3">
                                                <h6>Karol Daniela Mosquera Prieto</h6>
                                            </dd>
                                            <dd class="col-sm-6">
                                                <small class="text-muted">Tecnico profesional en diseño
                                                    multimedia</small>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-3">
                                                <h6>Corrección</h6>
                                            </dt>
                                            <dd class="col-sm-3">
                                                <h6>Paola Chavez Hernandez </h6>
                                            </dd>
                                            <dd class="col-sm-6">
                                                <small class="text-muted">Tecnico profesional en diseño
                                                    multimedia</small><br>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <dl class="row">
                                            <dt class="col-sm-3">Corrección</dt>
                                            <dd class="col-sm-3">
                                                <h6>Julian Esteban Ramirez Prieto</h6>
                                            </dd>
                                            <dd class="col-sm-6">
                                                <small class="text-muted">Tecnólogo en
                                                    análisis y desarrollo de sistemas de
                                                    información</small>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table table-light table-borderless">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"> ISBN Obra Completa: 191-981-989-9559 </td>                                    
                                </tr>
                                <tr>
                                    <td colspan="2">Copyright: 2021</td>                                    
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>DERECHOS RESERVADOS: La presentación y disposición en conjunto de esta obra,
                                            son propiedad del editor y autor,
                                            ninguna parte puede ser reproducida o trasmitida parcial o total, mediante
                                            ningún sistema o método electrónico
                                            o mecánico (incluyendo impresión, grabación o cualquier sistema de
                                            recuperación y almacenamiento de información
                                            y datos), sin previo consentimiento por escrito del editor y autor. </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <dl>
                                            <dd>&#169 Mundo Educativo Digital</dd>
                                            <dd><a
                                                    href="www.mundoeducativodigital.com">www.mundoeducativodigital.com</a>
                                            </dd>
                                            <dd><a
                                                    href="mailto:administración@mundoeducativodigital.com">administración@mundoeducativodigital.com</a>
                                            </dd>
                                            <dd>Soporte técnico: 322 831 5698</dd>
                                            <dd>Bogotá-Colombia</dd>
                                        </dl>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/assets/dist/js/demo.js'); ?>"></script>
    <!-- podcast -->
    <script src="<?php echo base_url('public/sound/js/podcast.js'); ?>"></script>
    <!-- JS Sound interaction -->
    <script src="<?php echo base_url('public/assets/sound/js/ome_sound.js'); ?>"></script>
    <!-- Tour visits -->
    <script src="<?php echo base_url('public/assets/tour/js/tourVisit.js'); ?>"></script>
    <!-- background music  -->
    <script src="<?php echo base_url('public/assets/sound/js/backgroundmusic.js'); ?>"></script>
    <!-- shepherd tour -->
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@10.0.1/dist/js/shepherd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@10.0.1/dist/css/shepherd.css" />
    <!-- legal information -->
    <script src="<?php echo base_url('public/assets/tour/js/legal.js'); ?>"></script>

    <script>
        // podcast.
        localStorage.setItem('podcastPlayed', 0)
        localStorage.setItem('objectId', '<?php echo $_SESSION["objectId"]; ?>')
        localStorage.setItem('tipo', '<?php echo $_SESSION["tipo"]; ?>')

        // tour 
        localStorage.setItem("bgMusicLogoOn", "<?php echo base_url('public/img/' . $site . '/template/volume_on.png'); ?>")
        localStorage.setItem("bgMusicLogoOff", "<?php echo base_url('public/img/' . $site . '/template/volume_off.png'); ?>")
        localStorage.setItem("getVisits", "<?php echo base_url('/users/getVisitsbyuser'); ?>")
        localStorage.setItem("setVisit", "<?php echo base_url('/users/setuservisit'); ?>")
        localStorage.setItem("manualTutorial", 0);

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

        // tour
        $(window).on('load', function () {
            let legal = localStorage.getItem('legal');
            console.log("legal: " + legal);
            legalModal();
            tourVisitsRegistered()
        })
    </script>
</body>

</html>