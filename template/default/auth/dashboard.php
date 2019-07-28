<?php

$page_title = "Dashboard";


 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
<!--                         <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="fa fa-clock text-white"></i></button>
 -->                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary " type="button"> 
                                Server Time: <?=date("M j, d g:i A");?>
                                <i class="fa fa-clock"></i>
                           </button>
                           
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
      <div class="row">
        <div class="col-md-9">

                <?php
                    $urgent_match = $this->auth()->urgent_match();
                    if ($urgent_match != null):
                        $recipient = $urgent_match->gh->user;
                  ?>
                 <div class="row ">
                    <div class="col-12" style="display: none;">
                        <a href="<?=domain;?>/user/ph_matches/<?=$urgent_match->ph->id;?>">
                               <div class="alert alert-danger text-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                    <h3 class="text-danger"><i class="fa fa-exclamation-circle"></i> Information
                                        <small class="badge badge-danger pull-right">
                                            Urgent -PH
                                        </small>
                                    </h3> 

                            <div class="row">
                                     <div class="col-md-6">
                                    

                                                <i class="fa fa-user"></i>
                                                <?=$recipient->fullname?> - Recipient<br>
                                                   <a href="tel:<?=$recipient->phone;?>">
                                                        <i class="fa fa-phone-square"></i> <?=$recipient->phone?>
                                                    </a><br>
                                                    
                                                   <a href="mailto://<?=$recipient->email;?>">
                                                    <i class="fa fa-envelope"></i> <?=$recipient->email?></a><br>
                                    </div>  
                                    <div class="col-md-6">
                                    #<?=$urgent_match->id;?> <?=$urgent_match->status();?><br>

                                                <i class="fa fa-calendar"></i>

                                                    <?=$urgent_match->created_at->toFormattedDateString();?><br>
                                                     <?php if (! $urgent_match->is_complete()):?>
                                                <i class="fa fa-clock"></i>
                                                     <span class="label label-danger" id="demo_<?=$urgent_match->id;?>">8:9:0</span>        
                                     <script>
                                          // Set the date we're counting down to
                                              var $now = new Date();
                                                  $now.add_secs(<?=$urgent_match->secs_to_expire();?>);
                                          var countDownDate_<?=$urgent_match->id;?> = $now.getTime();

                                          // Update the count down every 1 second
                                          var x_<?=$urgent_match->id;?> = setInterval(function() {

                                              // Get todays date and time
                                              var now = new Date().getTime();


                                              
                                              // Find the distance between now an the count down date
                                              var distance = countDownDate_<?=$urgent_match->id;?> - now;
                                              
                                              // Time calculations for days, hours, minutes and seconds
                                              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                                  hours+= days * 24;
                                              
                                              // Output the result in an element with id="demo_<?=$urgent_match->id;?>"
                                              document.getElementById("demo_<?=$urgent_match->id;?>").innerHTML =  hours + "h "
                                              + minutes + "m " + seconds + "s ";
                                              
                                              // If the count down is over, write some tex_<?=$urgent_match->id;?>t 
                                              if (distance < 0) {
                                                  clearInterval(x_<?=$urgent_match->id;?>);
                                                  document.getElementById("demo_<?=$urgent_match->id;?>").innerHTML = "TIMEOUT";
                                              }
                                          }, 1000);
                                    </script>

                                                     <?php endif;?>



                                </div>
                            </div>




                                </div>
                              </a>
                         
                    </div>
                </div>
            <?php endif ;?>

            <?php include 'includes/earnings_tab.php';?>

                <div class="row">

                    <div class="col-md-6 ">
                        <div class="card card-success card-inverse">
                          <a href="<?=domain;?>/user/ph" class="">
                            <div class="box text">
                                <h1 class="font-light text-white "><i class="fa fa-heart"></i>
                                  <span class="float-right">Provide Help</span>
                                </h1>

                                 <small>
                                   
                                 </small>
                                  <a href="<?=domain;?>/user/ph" class="btn btn-danger float-right">Provide Help</a>

                                <h6 class="text-white">
                                </h6>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card card-warning card-inverse">
                          <a href="<?=domain;?>/user/gh" class="">
                            <div class="box text">
                                <h1 class="font-light text-white"><i class="fa fa-gift"></i>
                                  <span class="float-right">Get Help</span>
                                </h1>

                                 <small>
                                   
                                 </small>
                                  <a href="<?=domain;?>/user/gh" class="btn btn-danger float-right">Get Help</a>

                                <h6 class="text-white">
                                </h6>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Column -->
<!--                     <div class="col-md-4">
                        <div class="card card-inverse card-info">
                            <div class="box bg-secondary text-center">
                                <h1 class="font-light text-white"><i class="fa fa-phone-square"></i></h1>
                                <h6 class="text-white"><a  href="javascript:void;" class="btn btn-primary">Verify Phone</a></h6>
                                <small class="text-white">You will be unable to get help if you do not verify your phone number</small>
                            </div>
                        </div>
                    </div>
 -->                    <!-- Column -->
               



                <style>
                  .list-group-item{margin-bottom: 2px !important;}
                </style>


                <ul class="list-group col-md-12">
                  <!-- <li class="list-group-item ">Recent PH</li> -->
                  <?php foreach ($this->auth()->ph_matches() as $ph_match):
                  $ph = $ph_match->ph;
                  $gh_user  =$ph_match->gh->user ;
                  $ph_user  =$ph_match->ph->user ;
                  ?>
                  <li class="list-group-item list-group-item-success">
                    <div class="row">
                    <div class="col-md-6">
                      <a href="<?=domain;?>/user/ph_matches/<?=$ph->id;?>">
                      <small>
                      Payer - <?=$ph_user->fullname;?>
                        <span class="badge badge-success float-right"><?=$ph_match->created_at->toFormattedDateString();?>
                        </span>
                      </small>
                      <p><small>#<?=$ph_match->id;?> <?=$ph_match->status();?>
                      </small>
                      </p>
                      </a>
                       <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                           Action
                        </button>
                        <div class="dropdown-menu">
                       <?php if (! $ph_match->is_complete()):?>
                          <a class="dropdown-item" href="javascript:void;">
                               <form action="<?=domain;?>/user/upload_ph_payment_proof" method="post"  enctype="multipart/form-data">
                            <input type="hidden" name="match_id" value="<?=$ph_match->id;?>">
                            <input style="display: none;" type="file"  onchange="form.submit();"  name="payment_proof">
                            <button type="button" class="btn btn-primary" onclick="form.payment_proof.click()"
                            >Upload Proof</button>
                        </form>     
                          </a>
                       <?php endif;?>
                       
                          <a class="dropdown-item" target="_blank"
                          href="<?=domain;?>/<?=$ph_match->payment_proof;?>">
                               See Proof
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <a href="<?=domain;?>/user/ph_matches/<?=$ph->id;?>">
                      <i class="fa fa-user"></i> <?=$gh_user->fullname;?> -Recipient

                      <p>
                        <a href="tel:<?=$gh_user->phone;?>">
                         <i class="fa fa-phone"></i>
                         <?=$gh_user->phone;?></a>
                         <br>

                        <small class="float-right">PayOut: <?=$ph->currency->html_code;?>
                        <?=$ph_match->ph_amount;?></small>
                      </p>
                      <p>
                           <?=$ph_match->gh->recipientAccount;?>
                      </p>
                      </a>
                    </div>
                  </div>
                    
                  </li>
                    <?php endforeach;?>
                </ul>
            

                <ul class="list-group col-md-12">
                  <!-- <li class="list-group-item ">Recent GH</li> -->
                  <?php foreach ($this->auth()->gh_matches() as $gh_match):
                  $gh = $gh_match->gh;
                  $gh_user  =$gh_match->gh->user ;
                  $ph_user  =$gh_match->ph->user ;
                  ?>
                  <li class="list-group-item list-group-item-warning">
                    <div class="row">
                    <div class="col-md-6">
                      <a href="<?=domain;?>/user/gh_matches/<?=$gh->id;?>">
                      <small>
                      Recipient - <?=$gh_user->fullname;?>
                        <span class="badge badge-success float-right"><?=$gh_match->created_at->toFormattedDateString();?>
                        </span>
                      </small>
                      <p><small>#<?=$gh_match->id;?> <?=$gh_match->status();?>
                      </small>
                      </p>
                      </a>
                      <div class="dropdown">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                             Action
                          </button>
                          <div class="dropdown-menu">
                         <?php if (! $gh_match->is_complete()):?>

                            <a onclick="$confirm_dialog = 
                                new ConfirmationDialog('<?=domain;?>/user/confirm_gh_match/<?=$gh_match->id;?>/<?=$gh_match->gh->id;?>')"
                             class="dropdown-item" href="javascript:void;">
                               Confirm 
                            </a>
                         <?php endif;?>
                            <a  class="dropdown-item" disable target="_blank"
                            href="<?=domain;?>/<?=$gh_match->payment_proof;?>">
                                 See Proof
                         <?php if ($gh_match->payment_proof == ''):?>
                            <small>nil</small>
                         <?php endif;?>
                            </a>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <a href="<?=domain;?>/user/gh_matches/<?=$gh->id;?>">
                      <i class="fa fa-user"></i> <?=$ph_user->fullname;?> -Payer

                      <p>
                        <a href="tel:<?=$ph_user->phone;?>">
                         <i class="fa fa-phone"></i>
                         <?=$ph_user->phone;?></a>
                         <br>

                        <small class="float-right">PayIn: <?=$gh->currency->html_code;?>
                        <?=$gh_match->ph_amount;?></small>
                      </p>
                      </a>
                    </div>
                  </div>
                    
                  </li>
                    <?php endforeach;?>
                </ul>


                <div class="col-md-12"></div>

            
                
                <div class="col-md-12">
                        <div class="card">
                        </div>
                    </div>

                <div class="col-md-12">
                        <div class="card card-inverse card-info">
                            <div class="box bg-secondary text-center">
                                <h1 class="font-light text-white"></h1>
                                <h6 class="text-white">
                                   </h6>
                                <small class="text-white">Join the <?=project_name;?> Official Telegram Group
                                
                                 <a target="_blank" href="<?=$settings['telegram_group_link'];?>"
                                 class="btn btn-primary">Join</a>
                                </small>


                            </div>
                        </div>
                    </div>


                   
                    <div class="col-md-12">
                        <div class="card card-warning card-inverse">
                            <div class="box text-center">
                                <h1 class="font-light text-danger"></h1>
                                <small class="text-danger"><i class="fa fa-exclamation-triangle"></i> WARNING!!! THIS IS A COMMUNITY OF MUTUAL FINANCIAL HELP! Participate only with spare money. Don't contribute all the money you have.</small>
                            </div>
                        </div>
                    </div>                   
                </div>
              </div>
              <div  class="col-md-3">
                <ul class="list-group" style="max-height: 250px;overflow-y: scroll;">
                  <li class="list-group-item  list-group-item-success">Recent PH</li>
                  <?php foreach (PH::recent_phs($this->auth()->id) as $ph):?>
                  <li class="list-group-item list-group-item-success">
                    <a href="<?=domain;?>/user/ph_matches/<?=$ph->id;?>">
                    <?=$ph->currency->html_code;?><?=$ph->amount;?> 
                    <small>
                      <span class="badge badge-success float-right"><?=$ph->created_at->toFormattedDateString();?>
                      </span>
                    </small>
                    <p><small>#<?=$ph->id;?> <?=$ph->status();?></small>
                      <small class="float-right">bal: <?=$ph->currency->html_code;?><?=$ph->payout_left;?></small></p>
                    </p>

                    </a>
                  </li>
                    <?php endforeach;?>
                </ul>

                <ul class="list-group" style="max-height: 250px;overflow-y: scroll;">
                  <li class="list-group-item  list-group-item-warning">Recent GH</li>
                  <?php foreach (GH::recent_ghs($this->auth()->id) as $gh):?>
                  <li class="list-group-item list-group-item-warning">
                    <a href="<?=domain;?>/user/gh_matches/<?=$gh->id;?>">
                    <?=$gh->currency->html_code;?><?=$gh->amount;?> 
                    <small>
                      <span class="badge badge-success float-right"><?=$gh->created_at->toFormattedDateString();?>
                      </span>
                    </small>
                    <p><small>#<?=$gh->id;?> <?=$gh->status();?></small>
                      <small class="float-right">bal: <?=$gh->currency->html_code;?><?=$gh->payin_left;?></small></p>
                    </a>
                  </li>
                    <?php endforeach;?>
                </ul>

              </div>
            </div>

               

<?php include 'includes/footer.php';?>
