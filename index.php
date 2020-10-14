<? include("./cnx/web-mysql.php"); ?>
<? if(!$_GET['tCodSeccion']){ header("Location: /es/inicio/"); } ?>
<? $tDirImages = "http://cursosmusi.sdibabec.com/cla/"; ?>
<!DOCTYPE html>
<html  >
<head><meta charset="gb18030">
  <!-- Site made with Mobirise Website Builder v5.0.29, https://mobirise.com -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.0.29, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/monicamusi.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Monica Musi [<?=ucwords(str_replace("-","",$_GET['tCodSeccion']));?>]</title>
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu menu3 cid-s90UTd9ZeX" once="menu" id="menu3-1">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="/assets/images/monicamusi.png" alt="Mobirise" style="height: 3rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/es/inicio/">
                            Inicio</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/es/cursos/">Cursos</a>
                    </li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/es/blog/">Blog</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/es/contacto/">Contacto</a></li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    
                </div>
                
            </div>
        </div>
    </nav>
</section>

<?
    $fichero = "./cnt/".$_GET['tCodSeccion'].".php";
    include($fichero);
    ?>

<section class="footer3 cid-s91mwUcb8s" once="footers" id="footer3-a">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="/es/inicio/" class="text-white">Inicio</a></li>
                
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="/es/cursos/" class="text-white">Cursos</a></li>
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="/es/blog/" class="text-white">Blog</a></li>
                <li class="foot-menu-item mbr-fonts-style display-7"><a class="text-white" href="/es/contacto/" target="_blank">Contacto</a></li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                <div class="soc-item">
                        <a href="#">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 Mónica Musi | Todos los Derechos Reservados</p>
            </div>
        </div>
    </div>
</section>


  <script src="/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="/assets/popper/popper.min.js"></script>
  <script src="/assets/tether/tether.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="/assets/playervimeo/vimeo_player.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  
  
  
</body>
</html>