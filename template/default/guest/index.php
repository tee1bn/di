
<?php
    
    
    $page_title = "Welcome ";
    include 'includes/header.php';


    $settings = SiteSettings::site_settings();

    ;?>

<style type="text/css">
    .about-bg {
    background-image: url("<?=$this_folder;?>/assets/img/custom_img/aboutus.jpg") !important;
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
#slideslow-header{

    background-image: url("<?=$this_folder;?>/assets/img/custom_img/hands.jpg") !important;
    background-size: 100%;
}

</style>

    <!--== Header Area Start ==-->
    <header id="slideslow-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text text-center">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h2>Welcome!</h2>
                                <h1>Grow Your Finance With Us</h1>
                                <p><?=project_name;?> is a community of people helping people. Designed and managed by members of the community.</p>
                                <div class="hero-btn">
                                    <a href="<?=domain;?>/register" class="theme-btn">Sign Up</a>
                                    <a href="<?=domain;?>/login" class="theme-btn">Sign In </a>
                                </div>
                                <a href="#about-area" class="scroll-bottom">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Who we are.</h2>
                        <p>Dove Investment is a community created by a group of people with great integrity to stabilize the financial status of its members. Our community is built on core principles of sustainability. We have taken time to analyze the shortcomings of other systems and we have put in place measures to curb most of their flaws. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h2>We are always ready for you</h2>
                            <p><?=project_name;?> gives you a technical platform which helps millions of its members worldwide to connect those who NEED help with those who are willing to PROVIDE help, for FREE.</p>
                            <ul class="theme-list">
                               <li> <?=project_name;?> is not a bank.</li>
                               <li> <?=project_name;?> does not collect your money.</li>
                               <li> <?=project_name;?> is not an online business, HYIP, investment or MLM program.</li>
                               <li><?=project_name;?> is a community where people help each other. </li>
                               
                            </ul>
                            <a href="<?=domain;?>/w/who-we-are" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image about-bg"></div>
        </div>
    </section>
    <!--== About Area End ==-->

    <!--== Service Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Points To Note.</h2>
                        <p>A few things you need to know about <?=project_name;?> Community.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-wrapper text-center">
                        <!-- Single Service Start -->
                        <div class="single-service-item">
                            <div class="service-icon">
                                <i class="fa fa-users text-white fa-4x"></i>

                                <!-- <img src="<?=$this_folder;?>/assets/img/svg-icons/pencil.svg" alt="ThemeMarshal"> -->
                            </div>
                            <div class="service-content">
                                <h4><?=project_name;?> is a community of helpers developed by participants</h4>
                                <p><?=project_name;?> is the first community built, managed and run by partcipants of MMM, with the sole objectives of creating financial freedom for its members</p>
                            </div>
                        </div>
                        <!-- Single Service End -->

                        <!-- Single Service Start -->
                        <div class="single-service-item">
                            <div class="service-icon">
                                         <i class="fa fa-credit-card text-white fa-4x"></i>

                                <!-- <img src="<?=$this_folder;?>/assets/img/svg-icons/bulb.svg" alt="ThemeMarshal"> -->
                            </div>
                            <div class="service-content">
                                <h4>All funds are transfered between participants</h4>
                                <p>All the money is in the bank accounts belonging to the members only! The members transfer funds to each other directly, without intermediaries! (What are intermediaries for? :-)) In fact, <?=project_name;?> only regulates the process — and nothing else.</p>
                                <!-- <a href="service-open.html" class="theme-btn">Learn More</a> -->
                            </div>
                        </div>
                        <!-- Single Service End -->

                        <!-- Single Service Start -->
                        <div class="single-service-item">
                            <div class="service-icon">
                                <i class="fa fa-lock text-white fa-4x"></i>
                                <!-- <img src="<?=$this_folder;?>/assets/img/svg-icons/develop.svg" alt="ThemeMarshal"> -->
                            </div>
                            <div class="service-content">
                                <h4><?=project_name;?> is secure</h4>
                                <p><?=project_name;?> is security conscious and continues to employ the best security standard/s to protect your data and accounts from hackers.</p>
                                <!-- <a href="service-open.html" class="theme-btn">Learn More</a> -->
                            </div>
                        </div>
                        <!-- Single Service End -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Service Area End ==-->

    <!--== Reviews Area Start ==-->
    <section id="review-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Review Start -->
                <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                    <div class="single-review">
                        <p><span class="count-number"><?=(User::count() * 2);?></span>k</p>
                        <h5>Participants</h5>
                    </div>
                </div>
                <!-- Single Review End -->

          
                <!-- Single Review End -->

                <!-- Single Review Start -->
                <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                    <div class="single-review">
                        <p><span class="count-number"><?=(PH::count() * 4);?></span>k</p>
                        <h5>Helps Provided</h5>
                    </div>
                </div>
                <!-- Single Review End -->

               
            </div>
        </div>
    </section>
    <!--== Reviews Area End ==-->

    
    <!--== Video Area Start ==-->
 <!--    <div id="video-area" class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="video-area-content">
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                        <a href="https://vimeo.com/45830194" class="video-icon mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--== Video Area End ==-->





    <!--== Testimonial Area Start ==-->
    <section id="testimonial-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Letter of Happiness.</h2>
                        <p>Lives are being transformed on our platform</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-content-wrapper">

                        <?php foreach (Testimonials::approved()->get()->take(6) as $testimonial) :?>

                        <!-- Single Client Start -->
                        <div class="single-client-testimonial">
                            <div class="client-thum">
                                <!-- <img src="<?=$this_folder;?>/assets/img/team/team-member-1.jpg" alt="ThemeMarshal"> -->
                            </div>
                            <div class="client-say-content">
                                <p><?=$testimonial->content;?></p>
                                <h2><?=$testimonial->attester;?> <span>Participant</span></h2>
                            </div>
                        </div>
                        <!-- Single Client End -->

                        <?php endforeach;?>
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonial Area End ==-->


    <!--== Partner Area Start ==-->
   <!--  <div id="partner-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-1.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-2.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-3.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-4.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-5.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-1.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="<?=$this_folder;?>/assets/img/partner/partner-logo-4.png" alt="ThemeMarshal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--== Partner Area End ==-->


    <!--== Hire Area Start ==-->
    <section id="hire-area" class="overlay section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hire-content-wrap">
                        <!-- Single Hire Start -->
                        <div class="single-hire-item">
                            <h2>Join our official Telegram Group</h2>
                            <p>We have introduced the Telegram group to help support get closer to you 
                                Share your ideas, understand the community 
                                and get updates easily</p>
                            <a href="<?=$settings['telegram_group_link'];?>" class="theme-btn">Join Group</a>
                        </div>
                        <!-- Single Hire End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Hire Area End ==-->

   

   <?php include 'includes/footer.php';?>