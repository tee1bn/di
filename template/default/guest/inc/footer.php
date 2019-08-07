
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="footer-logo"><img src="<?=$logo;?>" alt="..." class="img-fluid"></div>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Site pages</h5>
            <ul class="list-unstyled">
              <li> <a href="<?=domain;?>" class="footer-link">Home</a></li>
              <li> <a href="<?=domain;?>/about" class="footer-link">About</a></li>
              <li> <a href="<?=domain;?>/how_it_works" class="footer-link">How it works</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Quick Links</h5>
            <ul class="list-unstyled">
              <li> <a href="<?=domain;?>/login" class="footer-link">Login</a></li>
              <li> <a href="<?=domain;?>/register" class="footer-link">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved. 
                <?=project_name;?>
               </p>
              
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item">
                  <a href="#" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a><a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-vimeo"></i></a><a href="#" class="social-link"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?=$this_folder;?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=$this_folder;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$this_folder;?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=$this_folder;?>/vendor/lightbox2/js/lightbox.js"></script>
    <script src="<?=$this_folder;?>/js/front.js"></script>
  </body>
</html>