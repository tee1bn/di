<!DOCTYPE html> 
<html lang="en"> 


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title> <?=$page_title;?> |  <?=project_name;?></title>
    <link rel="canonical" href="http://gitstardigital.com/"/>

    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CMontserrat:600%2C400" rel="stylesheet">

    <!-- Template stylesheet -->
    <link rel="stylesheet" href="<?=$this_folder;?>/css/style.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?=$this_folder;?>/css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?=$this_folder;?>/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader  -->
     <!--    <div class="preloader">
            <div class="loading">
                <div class="wrapper">
                    <div class="cssload-loader"></div>
                </div>
            </div>
        </div> -->
        <!-- Preloader End  -->

        <!-- Main header  -->

        <style type="text/css">
            .web-logo{
                font-size: 32px;
                font-weight: bold;
                color: #ff3a46;
                text-shadow: 2px 3px #ffbfc3;
            }
        </style>


        <?php


            $menus = [

                [
                    'menu' => 'Home',
                    'link' => '',
                ],

                [
                    'menu' => 'About Us',
                    'link' => 'p/about_us',
                ],

                [
                    'menu' => 'How it works',
                    'link' => 'p/how_it_works',
                ],

                [
                    'menu' => 'FAQs',
                    'link' => 'p/faqs',
                ],

                [
                    'menu' => 'Contact ',
                    'link' => 'p/contact',
                ],
            ];









        ;?>




        <header class="main-header">

            <!-- Header Middle -->
            <div class="header-middle">
                <div class="inner-container">
                    <div class="container clearfix">
                        <div class="logo-middle">
                            <div class="logo">
                                <!-- <a href="index.html"><img src="<?=$this_folder;?>/images/logo.png" alt="" title=""></a> -->
                                <span class="web-logo">   <?=project_name;?></span>
                            </div>

                        </div>

                        <div class="nav-middle clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmobileshow" aria-controls="navmobileshow" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon fas fa-align-right"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navmobileshow">
                                    <ul class="navigation clearfix">
                                       
                                        <?php foreach ($menus as  $menu):?>
                                            <li><a href="<?=domain;?>/<?=$menu['link'];?>"><?=$menu['menu'];?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Header Info box-->
                            <div class="header-infobox clearfix">

                                <div class="headercont-box">
                                     <a href="<?=domain;?>/register" class="btn btn-danger">Sign Up</a>    
                                    <a href="<?=domain;?>/login" class="btn btn-danger">Sign In </a>
                                    <!-- 
                                    <a href="contact.html" class="headerbtn-contact">
                                        <span class="icon fa fa-user"></span>
                                        <div class="cont-widget">
                                            <span class="title">Needs For Help</span>
                                            <span class="subtitle">002-345-9876</span>
                                        </div>
                                    </a> -->
                                </div>

                                <!-- header widget Box -->
                                <div class="header-widgetbox clearfix">
                                    <!--Search Box-->
<!--                                     <div class="header-searcbox">
                                        <div class="dropdown">
                                            <button class="search-box-btn dropdown-toggle" type="button" id="togglemenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                            <ul class="dropdown-menu pull-right search-wrapper" aria-labelledby="togglemenuDropdown">
                                                <li class="seach-ineerbox">
                                                    <div class="form-container">
                                                        <form method="post" action="http://jiothemess.scriptdaddy.net/froomz/blog.html">
                                                            <div class="form-group">
                                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
 -->                                </div>
                            </div>
                            <!-- Header Info box end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Middle-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <!-- <a href="index.html" title=""><img src="<?=$this_folder;?>/images/logo.png" alt="" title=""></a> -->
                                                        <span class="web-logo">   <?=project_name;?></span>

                    </div>
                    <!--Right Menu Column-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                        <?php foreach ($menus as  $menu):?>
                                            <li><a href="<?=domain;?>/<?=$menu['link'];?>"><?=$menu['menu'];?></a></li>
                                        <?php endforeach;?>

                                    <li><a href="<?=domain;?>/register" class="text text-danger">Sign Up</a>    </li>
                                    <li><a href="<?=domain;?>/login" class="text text-danger">Sign In </a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
        </header>
        <!-- End Main Header -->

        