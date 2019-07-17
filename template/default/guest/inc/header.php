<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$page_title;?> | <?=project_name;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?=$this_folder;?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=$this_folder;?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="<?=$this_folder;?>/vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="<?=$this_folder;?>/css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?=$this_folder;?>/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?=$this_folder;?>/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=$logo;?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="<?=$logo;?>" style="
    height: 41px;
    width: 117px;" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?=domain;?>" class="nav-link active">Home</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?=domain;?>/w/about" class="nav-link">About</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?=domain;?>/w/how_it_works" class="nav-link">How it works</a></li>
                  <!-- Link-->
            <!--   <li class="nav-item dropdown"><a id="pages" href="<?=domain;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                <div class="dropdown-menu"><a href="<?=domain;?>aq.html" class="dropdown-item">FAQ</a><a href="<?=domain;?>ontact.html" class="dropdown-item">Contact</a><a href="<?=domain;?>ext.html" class="dropdown-item">Text Page</a></div>
              </li> -->

            </ul>
            <a href="<?=domain;?>/register"  class="btn btn-primary navbar-btn ml-0 ml-lg-3">Register </a>
            <a href="<?=domain;?>/login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a>
          </div>
        </div>
      </nav>
    </header>
   
    