<?php


$upline = User::where('mlm_id',$user->referred_by)->first();
$page_title = "Team List";
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Team List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Team List</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                    <div class="row">
                        <div class="referral col-md-6" align="center">
                          <?php

                            if ($admin) {
                                $link = Config::domain()."/genealogy/placement/{$upline['username']}";
                            }else{

                                $link ='#' ;
                            }

                          ;?>

                            <a href="<?=$link;?>">
                                <img src="<?=domain;?>/<?=$user->profilepic;?>" style="border-radius: 70%;height: 50px;"
                                 data-toggle="tooltip" title="Upline: <?=ucfirst($upline['lastname']);?> <?=ucfirst($upline['firstname']);?>">
                                <?php if($user->id == $this->auth()->id):?>
                                    <h4>Me</h4>
                                <?php else:?>
                                <h4><?=$user->lastname;?> <?=$user->firstname;?>
                                 </h4>
                                <?php endif;?>
                          </a>
                            <?=$ref_link =$this->auth()->referral_link();?>
                            <button onclick="copy_text('<?=$ref_link;?>');" class="btn btn-success">Copy Link</button>

                     <!--  
                      <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"> 
                          Downline Level <span class="badge badge-danger"> <?=$level_of_referral;?> </span>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                         <?php for ($i=1; $i <=3 ; $i++):?>
                              <li>
                                <a class="dropdown-item" href="<?=domain;?>/genealogy/placement_list/<?=$user->username;?>/<?=$i;?>">
                                Level <?=$i;?>
                                </a>
                              </li>
                         <?php endfor;?>
                        </ul>
                      </div> -->
                      </div>

                    </div>


                    <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              <div class="table-responsive">
                                  
                                    <table id="myTable" class="table table-hover">
                                    </thead>
                                    <tbody>
                                      <?php $i=1; foreach ($list['list'] as $key => $downline):?>
                                      <tr>

                                        <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">
                                          <a href="<?=domain;?>/genealogy/placement_list/<?=$downline->username;?>" class="text-white">
                                            
                                              <span style="margin-right: 7px;">
                                                   <?=$i++;?>)
                                              </span>

                                                <strong> <?=$downline->firstname;?> (<?=$downline->username;?>)</strong>
                                                 <br>
                                                <span class="float-">Joined: <?=$downline->created_at->toFormattedDateString();?> <?=$downline->activeStatus;?></span>
                                            <div style="position: absolute;top: 10px;right: 25px;">
                                            <?=$order->TransactionID;?>
                                          </div>
                                          </a>
                                        </div>
                                      </tr>
                                    <?php endforeach;?>
                                    <?php if (count($list['list'])==0) :?>
                                      <tr>
                                        <center>No records Found</center>
                                      </tr>

                                    <?php endif;?>
                                    </tbody>
                                  </table>

                              </div>




                            </div>
                        </div>
                    </div>
                </div>
                  <ul class="pagination">
                      <?=$this->pagination_links($list['total'] , $per_page) ;?>
                  </ul>  
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
          

<?php include 'includes/footer.php';?>
<script>
    $(function() {
        $('#myTable').DataTable();
    });
</script>
