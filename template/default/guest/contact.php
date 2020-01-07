<?php 
$page_title = "About us";
include_once 'includes/header.php';?>


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1><span>Contact</span> Us</h1>
            <p>Get in touch with us. We will put you through.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-md-12">
               <form  method="POST" class="ajax_form" id="sa" action="<?=domain;?>/home/send_message" >
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                       <input type="text" name="name" class="form-control" placeholder="Name" required 
                       >
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                       <input type="email" class="email form-control" name="email" placeholder="Email" required 
                       >
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                       <input type="text" name="subject" class="form-control" placeholder="Subject" required 
                       >
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                       <textarea name="message" rows="7" placeholder="Massage" class="form-control" required></textarea>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                   <br>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">

                       <div class="g-recaptcha form-group" data-sitekey="<?=SiteSettings::site_settings()['google_re_captcha_site_key'];?>"></div>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 form-group ">
                       <button type="submit" id="submit" class="btn btn-danger">Submit</button>
                       <div class="clearfix"></div>
                   </div>   
               </form>  

            </div>

        </div>
    </div>
</div>
<!-- Contact 1 end -->
<?php include_once 'includes/footer.php';?>