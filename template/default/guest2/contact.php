<?php 
$page_title = "Contact";
$page_description = "";
include 'includes/header.php';?>

        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?=$this_folder;?>/images/background/bg3.jpg)">
            <div class="auto-container">
                <h1>Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>
        <!--Page Title End-->

        <!--Start Contact-->
        <div class="contactpage">
            <div class="container">
                <div class="row clearfix">
                    <!--Contact Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="infobox wow fadeInLeft animated" data-wow-delay="0ms">
                            <!-- Title Box -->
                            <div class="title-box">
                                <h3>Contact Details</h3>
                                <div class="title-text"></div>
                            </div>
                           <!--  <ul class="all-contact-list">
                                <li><span class="icon fas fa-home"></span><strong>Head Office</strong>20c Avenue, lakepool, USA</li>
                                <li><span class="icon fas fa-map-marker-alt"></span><strong>Office Two</strong>Business Avenue, Laredo, USA </li>
                                <li><span class="icon fa fa-envelope"></span><strong>Email us</strong>froomz@example.com</li>
                                <li><span class="icon fas fa-phone"></span><strong>Call Support</strong>+(123) 456 7849</li>
                                <li><span class="icon fas fa-mobile"></span><strong>Call Support</strong>+(123) 456 7849</li>
                            </ul>
 -->
                            <!-- Social Links -->
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>

                        </div>
                    </div>
                    <!--Contact Info Column End -->

                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="infobox wow fadeInRight animated" data-wow-delay="0ms">
                            <!-- Sec Title -->
                            <div class="main-title-box">
                                <div class="small-title">Get in touch</div>
                                <!-- <h2 class="big-title">Send a Message</h2> -->
                            </div>

                            <!-- Contact Form -->
                            <div class="contact-form">
								<form method="post" action="http://jiothemess.scriptdaddy.net/froomz/ajax/mail.php" id="contact-form" class="contact-form" novalidate="novalidate">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text"  name="name" placeholder="First Name " required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email " required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone " required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject " required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message "></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-button" type="submit" name="submit-form">Send Now</button>
											<div id="loading" style="display:none"><img src="images/ajax-loader.png" alt="loading"></div>
											<div class="contact-form-message"></div>											
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Form Column End -->
                </div>
            </div>
        </div>
        <!--End Contact-->

<?php 
include 'includes/footer.php';?>
