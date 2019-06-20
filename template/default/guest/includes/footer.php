
        <!-- Footer start -->
        <footer class="site-footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <!-- <img src="<?=$this_folder;?>/images/logo.png" alt=""> -->
                                                        <span class="web-logo">   <?=project_name;?></span>
                                </div>
                                <p style="text-align: justify;">

WARNING! There are no guarantees and promises! Neither explicit nor implicit. There are neither investments nor business! Participants help each other, sending each other money directly and without intermediaries. That’s all! There's nothing more. There are no securities transactions, no relationship with the professional participants of the securities market; you do not acquire any securities.</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Navigation</h3>
                                </div>
                                <ul>
                                        <?php foreach ($menus as  $menu):?>
                                            <li><a href="<?=domain;?>/<?=$menu['link'];?>"><?=$menu['menu'];?></a></li>
                                        <?php endforeach;?>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget link-widget service-link-widget">
                                <div class="widget-title">
                                    <h3> <br><!-- Services --></h3>
                                </div>
                                <ul>
                                    <li><a href="<?=domain;?>/login">Sign in</a></li>
                                    <li><a href="<?=domain;?>/register">Sign up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col col-xs-12">
                            <p class="copyright">Copyright © 2019. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

    </div>

    <!--Scroll to top-->
    <button class="scroll-totop"><i class="fa fa-angle-up" aria-hidden="true"></i></button>

    <!-- main jQuery -->
    <script src="<?=$this_folder;?>/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="<?=$this_folder;?>/js/popper.min.js"></script>
    <script src="<?=$this_folder;?>/js/bootstrap.min.js"></script>

    <!-- Wow Script -->
    <script src="<?=$this_folder;?>/js/wow.js"></script>
    <!-- count to -->
    <script src="<?=$this_folder;?>/js/jquery.counterup.min.js"></script>
    <script src="<?=$this_folder;?>/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="<?=$this_folder;?>/js/owl.js"></script>
	<!-- fancybox -->
	<script src="<?=$this_folder;?>/js/jquery.fancybox.min.js"></script>	
    <!-- validate -->
    <script src="<?=$this_folder;?>/js/validation.js"></script>
    <!-- isotope script-->
    <script src="<?=$this_folder;?>/js/isotope.js"></script>
    <!-- Easing -->
    <script src="<?=$this_folder;?>/js/jquery.easing.min.js"></script>
    <!-- Gmap helper -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
    <!--Gmap script-->
    <script src="<?=$this_folder;?>/js/gmaps.js"></script>
    <script src="<?=$this_folder;?>/js/map-helper.js"></script>

    <!-- custom script -->
    <script src="<?=$this_folder;?>/js/custom.js"></script>

</body>

</html>