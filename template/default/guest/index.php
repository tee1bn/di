<?php 
$page_title = "Welcome";
include 'inc/header.php';
;?>

    <!-- Hero Section-->
    <section class="hero">
      <div class="container mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="hero-heading mb-0">Campus Cash <br></h1>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4">Campus Cash is a community financial aid and student mutual assistant system. .</p>
              </div>
            </div>
           
          </div>
          <div class="col-lg-6"><img  style="border: 15px solid #b89c2e29" src="<?=$this_folder;?>/img/packages/main.jpeg" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
        </div>
      </div>
    </section>
        <section>
      <div class="container">
        <div class="text-center">
          <h2>Packages</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Available packages to offer donations.</p>
            </div>
          </div>
        </div>

        <?php

          $packages = [

              [
                'package'=>"Stationary",
                'description'=> "Investment from R500-1000",
                'img'=> "stationery_and_books.jpeg"
                ],
              [
                'package'=>"DRIVERS LICENCE PACKAGE ",
                'description'=> "Investment from R500",
                'img'=> "driver_license.jpg"
                ],
             
              [
                'package'=>"Digital Package",
                'description'=> "IPhone, Camera, Laptop, tablets e.t.c",
                'img'=> "digital_package.jpeg"
                ],
             
              [
                'package'=>"BOOK PACKAGE ",
                'description'=> "Investment from R1000-R2500",
                'img'=> "stationery_and_books.jpeg"
                ],
             
              [
                'package'=>"MEAL PACKAGE ",
                'description'=> "Investment as little as R500-R1000",
                'img'=> "meal_package.jpeg"
                ],
             
              [
                'package'=>"Clothing Package",
                'description'=> "Investment from R1000-R5000 (Including Graduation clothes)",
                'img'=> "clothing.jpeg"
                ],
                       [
                'package'=>"Vacation Package",
                'description'=> "Investment From R2500-R5000",
                'img'=> "vacation.jpeg"
                ],
                
          ];

        ;?>


        <div class="integrations mt-5">
          <div class="row">

            <?php foreach ($packages as $package) :?>
           <!--    <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end">
                    <img src="<?=$this_folder;?>/img/monitor.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4"><?=$package['package'];?></h3>
                  <p class="text-small font-weight-light"><?=$package['description'];?></p>
                </div>
              </div> -->

              <div class="card col-md-4" >
              <img class="card-img-top" style="height: 200px; object-fit: cover;" src="<?=$this_folder;?>/img/packages/<?=$package['img'];?>" alt="Card image">
              <div class="card-body">
                <h4 class="card-title"><?=$package['package'];?></h4>
                <p class="card-text"><?=$package['description'];?></p>
                <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
              </div>
            </div>

            <?php endforeach ;?>
          </div>
        </div>
      </div>
    </section>
    <!-- CLients Section-->
<!--     <section class="bg-gray">
      <div class="container">
        <div class="text-center">
          <h2>Built on trust</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2"></p>
            </div>
          </div>
        </div>
        <div class="clients mt-5">
          <div class="row">
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-1.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-2.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-3.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-4.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-5.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="<?=$this_folder;?>/img/client-6.svg" alt="" class="client-image img-fluid"></div>
          </div>
        </div>
      </div>
    </section>
 -->    <!-- How it works section-->
<!--     <section>
      <div class="container">
        <div class="text-center">
          <h2>Curious how Appton works for <br>large organizations?</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. Eiusmod tempor incididunt ut labore.</p>
            </div>
          </div><a href="#" class="btn btn-primary mt-4">Get Started</a>
        </div>
      </div>
    </section>
 -->    <!-- How it works Section-->
  <!--   <section class="bg-gray">
      <div class="container text-center text-lg-left">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 class="divider-heading">Curious how Appton <br>works for large</h2>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead divider-subtitle mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing. Vitae animi mollitia cumque sunt soluta. consectetur adipisicing.</p>
              </div>
            </div><a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-5 mt-5 mt-lg-0"><img src="<?=$this_folder;?>/img/illustration-2.svg" alt="" class="divider-image img-fluid"></div>
        </div>
      </div>
    </section>
 -->


    <?php include 'inc/footer.php';?>