<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $site; ?> Mundo educativo digital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/modules.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed" style="background-image: url(<?php echo base_url('public/img/' . $site . '/template/bcg_template.jpg'); ?>);height: auto;">
  <!-- video background -->
  <video autoplay muted loop id="myVideo">
    <source src="<?php echo base_url('public/img/' . $site . '/template/video_back.mp4'); ?>" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-transparent">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_menu.gif'); ?>" style="width: 1.5cm; height: 1cm; ">
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-transparent">
      <!-- Brand Logo -->
      <a href="<?php echo base_url('courses/' . $site); ?>" class="brand-link">
        <img src="<?php echo base_url('public/img/' . $site . '/template/logo.PNG'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mundo Educativo</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) 
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="https://www.colorear-online.com/" target="blank_" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_pincel.gif'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_2s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                  <h6>PAINT ACTIVITY</h6>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('dict/' . $site);  ?>" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_dictionary.jpg'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                  <h6>DICTIONARY</h6>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <?php
              if ($site == 'kids') {
                echo '<a href="https://www.youtube.com/watch?v=TN0u_-msioQ" class="nav-link" target="blank_">';
              } else {
                echo '<a href="https://www.youtube.com/watch?v=9AYl10qxc0M" class="nav-link" target="blank_">';
              }
              ?>
              <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_music.gif'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 70px; height: 70px; ">
              <span class="badge badge-info bg-green">
                <h6>MUSIC</h6>
              </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://api.whatsapp.com/send/?phone=3228315698&text=Necesito+soporte+de+la+plataforma&app_absent=0" class="nav-link" target="_blank">
                <img src="<?php echo base_url('public/img/' . $site . '/template/whatsapp_logo.png'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                  <h6>SUPPORT</h6>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('faq/' . $site); ?>" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/faq.png'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                  <h6>PREGUNTAS?</h6>
                </span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-transparent">
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.gif'); ?>" alt="">
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </section> -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php $this->renderSection('content'); ?>
            </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer bg-transparent">
      <div id="mySidepanel" class="sidepanel">
        <div class="row float-left">
          <div class="col sm-6">
            <a class="button" onclick="sonido()" style="width: 100px;">
              <img src="<?php echo base_url('public/img/' . $site . '/template/footer_no_volume.PNG'); ?>" id="volume" class="img-thumbnail img-fluid" style="width: 70px; height: 70px;  ">
            </a>
          </div>
          <div class="col sm-3">
            <audio id="myAudio" autoplay preload="auto" allow="autoplay">
              <source src="<?php echo base_url('public/sound/' . $site . '/sound_body_rdc.mp3'); ?>" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio><br>
          </div>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <img src="<?php echo base_url('public/img/' . $site . '/template/footer_selector.gif'); ?>" class="img-thumbnail img-circle" style="width: 50px; height: 50px;" alt="">
          </a>
        </div>
      </div>

      <button class="openbtn" onclick="openNav()">
        <img src="<?php echo base_url('public/img/' . $site . '/template/footer_selector.gif'); ?>" class="img-thumbnail img-circle" style="width: 50px; height: 50px; ">
      </button>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('public/assets/dist/js/adminlte.min.js'); ?>"></script>
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
    myAudio.volume = .10;
    myAudio.play();
    myAudio.loop = true;

    function sonido() {
      if (myAudio.paused) {
        icono.setAttribute("src", "<?php echo base_url('public/img/' . $site . '/template/footer_no_volume.PNG'); ?>");
        myAudio.play();
        myAudio.loop = true;
      } else {
        icono.setAttribute("src", "<?php echo base_url('public/img/' . $site . '/template/volume.PNG'); ?>");
        myAudio.pause();
      }
    }

    var element = document.querySelector("body");
    //element.requestFullscreen();
  </script>
</body>

</html>