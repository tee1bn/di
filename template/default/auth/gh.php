<?php
$page_title = "Mines";
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Mines</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Mines</li>
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
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body row">
                                
                                <div class="col-md-12">

                                    <div class="card">


                                        <div class="card-header"  data-toggle="collapse" data-target="#demo1">
                                            <a href="javascript:void;">
                                                Click  to Mine
                                            </a>
                                        </div>
                                      
                                        <div class="card-body card-body-bordered collapse" id="demo1" >

                                            <form action="<?=domain;?>/user/create_gh_request" method="post">
                                                
                                                <div class="form-group">
                                                    <label>Amount (<?=$currency;?>)</label>
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend"></span>
                                                    <input id="tch3" type="number" required="" 
                                                    max="<?=$auth->available_balance();?>" name="amount" 
                                                      data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control">
                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-success " type="submit">Mines</button>
                                                    </span>
                                                </div> 

                                                <small class="text-danger"><?=Input::inputError('amount');?></small><br>

                                                <small class="text-danger">* Balance is <?=$currency;?> <?=$this->money_format($auth->available_balance());?></small>
                                            </div>

                                        


                                            </form>



                                           
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                 <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">Mines Requests</a>
                            </div>
                            <div class="card-body collapse show" id="demo">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <tbody>
                                            <?php $i=1; foreach ($this->auth()->GhRequests as $gh_request) :?>


                                            <tr>

                                              <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">             
                                                <?php if($gh_request->matched->isNotEmpty()) :?>
                                                    <a class="float-right" href="<?=domain;?>/user/gh_matches/<?=$gh_request->id;?>">
                                                        <span class="btn btn-sm btn-warning">Open</span>
                                                    </a>
                                                <?php endif;?>
                                            
                                                    <span style="margin-right: 7px;">
                                                         #<?=$gh_request->id;?>
                                                    </span>

                                                      <strong> Amt: <?=$currency;?><?=MIS::money_format($gh_request->amount);?></strong>
                                                       <br>
                                                      <span class="float-">
                                                        <span class="badge badge-secondary">
                                                            <?=date('M j, Y h:iA', strtotime($gh_request->created_at));?>
                                                        </span>
                                                           <?=$gh_request->status();?>
                                                          
                                                      </span><br>
                                              </div>
                                            </tr>
                                            <?php $i++; endforeach ;?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

<?php include 'includes/footer.php';?>
<script>
    $(function() {
        $('#myTable').DataTable();
    });
</script>
