<?php
$page_title = "Get Help";
 include 'includes/header.php';?>

<?php

    $first_withdrawals = LevelIncomeReport::where('owner_user_id', $auth->id)
                                            ->where('commission_type','First withdrawal')
                                            ->where('status','Credit')->sum('amount_earned');
    $earnings = $first_withdrawals + $auth->matured_mavros_worth();

    $bonus = $auth->sum_total_earnings();

    $actual_bonus = $auth->sum_total_earnings();

    $withdrawable_bonus = ($actual_bonus > $settings['minimum_withdrawable_bonus'])? $actual_bonus:0;




    $attempted_withdrawals = $auth->attempted_withdrawals();

    $balance = max (($earnings + $withdrawable_bonus - $attempted_withdrawals), 0);



;?>
    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Get Help</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Get Help</li>
                        </ol>
                    </div>
                  
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-success " type="button"> 
                                Earnings: <?=$currency;?><?=$this->money_format($earnings);?>
                           </button>
                            <button class="btn btn-primary " type="button"> 
                               Available Bonus: <?=$currency;?><?=$this->money_format($bonus);?>
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
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body row">
                                
                                <div class="col-md-12">

                                    <div class="card">




                                        <div class="card-header"  data-toggle="collapse" data-target="#demo1">
                                            <a href="javascript:void;">
                                                    Get Help <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                      
                                        <div class="card-body card-body-bordered collapse show" id="demo1" >

                                            <form action="<?=domain;?>/user/create_gh_request" method="post">
                                                
                                                <div class="form-group">
                                                    <label>Amount (<?=$currency;?>)</label>
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend"></span>
                                                    <input id="tch3" type="number" required="" 
                                                    max="<?=$balance;?>" name="amount" 
                                                      data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control">
                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-success " type="submit">Get Help</button>
                                                    </span>
                                                </div> 

                                                <small class="text-danger"><?=Input::inputError('amount');?></small><br>

                                                <small class="text-danger">* Balance is <?=$currency;?> <?=$this->money_format($balance);?></small>
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
                                <a href="javascript:void;">Get Help Requests</a>
                            </div>
                            <div class="card-body collapse show" id="demo">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <thead>
                                            <th>#Ref</th>
                                            <th>Amount (<?=$currency;?>)</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>*</th>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach ($auth->GhRequests as $gh_request) :?>
                                            <tr>
                                                <td><?=$gh_request->id;?></td>
                                                <td><?=$this->money_format($gh_request->amount);?></td>
                                                <td>
                                                    <span class="badge badge-sm badge-secondary">
                                                        <?=$gh_request->created_at->toFormattedDateString();?></td>
                                                    </span>
                                                <td>
                                                    <?=$gh_request->status();?><br>
                                                    <?=$gh_request->GhRecommittmentStatus;?>
                                                </td>
                                                <td>
                                                    <?php if($gh_request->matched->isNotEmpty()) :?>
                                                        <a href="<?=domain;?>/user/gh_matches/<?=$gh_request->id;?>">
                                                            <span class="label label-sm label-warning">Open</span>
                                                        </a>
                                                    <?php endif;?>
                                            </td>
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
