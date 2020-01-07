<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?=$page_title;?> | <?=project_name;?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/fonts/flaticon/font/flaticon.css">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?=$this_folder;?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?=$this_folder;?>/assets/css/skins/default.css">

</head>
<body id="top">
    <style>
        .option-panel{
            display: none !important;
        }
    </style>
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="<?=domain;?>">
                        <span style="color: #ff0000;font-weight: 900;"><?=project_name;?></span>
                        <!-- <img src="<?=$this_folder;?>/assets/img/logos/black-logo.png" alt="logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="<?=domain;?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=domain;?>/p/about_us">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=domain;?>/p/how_it_works">How it works</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=domain;?>/p/faqs">Faqs</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=domain;?>/p/contact">Contact</a></li>
                            
                            <li class="nav-item dropdown mtbl">
                                <a class="btn btn-sm btn-success btn-round signup-link" href="<?=domain;?>/login">Login</a>
                                <a class="btn btn-sm btn-dark btn-round signup-link" href="<?=domain;?>/register">Signup</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

