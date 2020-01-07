<?php 
$page_title = "About us";
include_once 'includes/header.php';?>



<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="<?=domain;?>">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Managment area start -->
<div class="" style="margin: 20px;">
    <div class="container">

                <?=CMS::fetch('about_us');?>

    </div>
</div>
<!-- Managment area end -->

<?php include_once 'includes/footer.php';?>
