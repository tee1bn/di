<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <?php 

    require 'template/default/assets/drift_installation_code.php';

    ;?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$page_description;?>">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?=fav_icon;?>" type="image/x-icon" />

    <title><?=$page_title;?> | <?=project_name;?></title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Vegas CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/plugins/vegas.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl-Carousel CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/plugins/owl.carousel.css" rel="stylesheet">
    <!--=== Theme Animation CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/animation.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?=$this_folder;?>/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?=$this_folder;?>/assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="preloader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="waves-block">
                <div class="waves wave-1"></div>
                <div class="waves wave-2"></div>
                <div class="waves wave-3"></div>
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== HeaderTop Area Start ==-->
    <div class="header-top-area fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Logo Area Start -->
                    <a href="<?=domain;?>" class="logo-area">
                        <img style="height: 41px;" src="<?=logo;?>" alt="<?=project_name;?>" class="img-responsive">
                    </a>
                        <span style="font-size: 21px; font-weight: 900;"><?=project_name;?></span>
                    <!-- Logo Area End -->
                </div>

                <div class="col-lg-9">
                    <!-- MainMenu Area -->
                    <nav class="main-menu alignright">
                        <ul>
                            <li class="active"><a href="<?=domain;?>">Home</a>
                            </li>
                            <li><a href="<?=domain;?>/who-we-are">Who we are</a></li>
                            <li><a href="<?=domain;?>/ideology">Ideology</a></li>
                            <li><a href="<?=domain;?>/how-it-works">How to Works</a></li>
                            <li><a href="<?=domain;?>/faqs">Faqs</a></li>
                            <li><a href="<?=domain;?>/contact">Contact</a></li>

                             <li class="active"><a href="<?=domain;?>/register">Sign Up</a></li>
                             <li class="active"><a href="<?=domain;?>/login">Sign in</a></li>


                        </ul>
                    </nav>
                    <!-- MainMenu Area -->
                </div>
            </div>
        </div>
    </div>
    <!--== HeaderTop Area End ==-->
