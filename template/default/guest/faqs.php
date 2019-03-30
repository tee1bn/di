
<?php
    
    
    $page_title = "Faqs";
    include 'includes/header.php';?>



    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Faqs.</h2>
                        <p>Hare is some informaton on our company and teme member information to yoiu know</p>
                    </div>
                </div>
            </div>


                <div class="col-lg-12">
                    <div id="accordion">

                      <div class="card">
                        <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Collapsible Group Item #1
                          </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum..
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Collapsible Group Item #2
                          </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum..
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Collapsible Group Item #3
                          </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum..
                          </div>
                        </div>
                      </div>

                    </div>            
            </div>
        </div>

   
    </section>
    <!--== About Area End ==-->


   

   <?php include 'includes/footer.php';?>