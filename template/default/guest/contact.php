
<?php
    
    
    $page_title = "Contact ";
    include 'includes/header.php';?>



    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact\ Us.</h2>
                        <p>Hare is some informaton on our company and teme member information to yoiu know</p>
                    </div>
                </div>
            </div>
         <div class="col-lg-12">
                    <div class="contact-area-form">
                        <h2>Send Me Messages </h2>
                        <p>Lorem ipsum dolor sit amet adipisi to add in the mirred in.</p>

                        <form id="contactForm" name="sentMessage">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="NAME">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="EMAIL">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" type="text" placeholder="SUBJECT">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="MESSAGE"></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div id="success"></div>
                            <button id="sendMessageButton" class="theme-btn" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
        </div>

   
    </section>
    <!--== About Area End ==-->


   

   <?php include 'includes/footer.php';?>