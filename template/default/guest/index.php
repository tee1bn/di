<?php 
$page_title = "Welcome";
include_once 'includes/header.php';?>
<!-- main header end -->

<!-- Banner start -->
<div class="banner banner-bg-color">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?=$this_folder;?>/assets/img/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <div id="typed-strings">
                                <p>Grow Your Finance</p>
                            </div>
                            <h1 class="typed-text">&nbsp;
                                <span id="typed"></span>
                            </h1>
                            <p data-animation="animated fadeInUp delay-10s"><?=project_name;?> gives you an opportunity to generate a steady weekly flow of income</p>
                            <a data-animation="animated fadeInUp delay-10s" href="<?=domain;?>/register" class="btn btn-lg btn-round btn-danger">Get Started Now</a>
                            <a data-animation="animated fadeInUp delay-10s" href="<?=domain;?>/login" class="btn btn-lg btn-round btn-success">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- services start -->
<div class="services content-area-2 bg-grea">
    <div class="container">
        <div class="main-title">
            <h1><span>About</span></h1>
            <p><?=project_name;?> is a community of helpers.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media services-info">
                    <i class="fa fa-users"></i>
                    <div class="media-body">
                        <h5>World's Best Cloud-Based Mining Platform</h5>
                        <p><?=project_name;?> is a community built, managed and run by serial Investors, with the sole objectives of creating financial freedom for its members.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media services-info">
                    <i class="flaticon-connection-1"></i>
                    <div class="media-body">
                        <h5><?=project_name;?> robust referral system</h5>
                        <p><?=project_name;?> referral brings you an extra earning opportunity which can see you earn an average of N25,000 weekly just by inviting your friends using your referral link..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media services-info">
                    <i class="fa fa-lock"></i>
                    <div class="media-body">
                        <h5><?=project_name;?> is secure</h5>
                        <p><?=project_name;?> is security conscious and continues to employ the best security standards to protect your data and accounts from hackers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Counters start -->
<div class="counters counters-2 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter"><?=(User::count() + 1250 );?></h1>
                    <h5>Members</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-people"></i>
                    <h1 class="counter"><?=(PH::count() + 6783 );?></h1>
                    <h5>Pledges</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<div class="testimonial-1 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1><span>Our</span> Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">





                            <?php $i=1; foreach (Testimonials::approved()->get()->take(6) as $testimonial) :?>
                                    <div class="carousel-item <?=($i==1)?'active' :'';?>" >
                                        <div class="row">
                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <p class="lead">
                                                    <?=$testimonial->content;?>
                                                </p>
                                                <div class="author-name">
                                                    <?=$testimonial->attester;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                <?php $i++; endforeach;?>






                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                            <span class="slider-mover-left" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                            <span class="slider-mover-right" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 1 end -->

<?php include_once 'includes/footer.php';?>
