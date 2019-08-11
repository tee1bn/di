<?php
$page_title = "Get Help";
 include 'includes/header.php';?>


    
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






                  
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
              <?php
                $matured_mavros_worth = $auth->matured_mavros_worth();
               foreach ($matured_mavros_worth as $currency_id => $balance) :?>
                    <div class="col-sm-6">
                        <div class="card card-inverse card-warning">
                            <div class="box bg-dark text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($balance['available_balance']);?>   </h3>
                                <h6 class="text-white">Available Balance - <?=$balance['currency']['html_code'];?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <?php if (count($matured_mavros_worth) == 0):?>
                    <div class="col-sm-12">
                        <div class="card card-inverse card-warning">
                            <div class="box bg-dark text-center">
                                <h6 class="text-white">Your Available GH Balances will show here</h6>
                            </div>
                        </div>
                    </div>



                <?php endif;?>


                </div>

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
                                                    <label>Amount *</label>
                                                    <input id="tch3" type="number" required="" value="<?=Input::old('amount');?>" name="amount" 
                                                      data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control">
                                                    </div>



                                                    <div class="form-group">
                                                    <label>Currency </label>
                                                        <select class="form-control" name="currency_id" required="">
                                                            <option value="">Select Currency</option>
                                                            <?php foreach (Currency::available_currencies()->get() as $currency):?> 
                                                            <option value="<?=$currency->id;?>"><?=$currency->name;?></option>
                                                            <?php endforeach;?>
                                                        </select>   
                                                    </div>




                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-success " type="submit">Get Help</button>
                                                    </span>

                                                <small class="text-danger"><?=Input::inputError('amount');?></small><br>



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
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>*</th>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach ($this->auth()->GhRequests as $gh_request) :?>
                                            <tr>
                                                <td><?=$gh_request->id;?></td>
                                                <td><?=$this->money_format($gh_request->amount);?> <?=$gh_request->currency->html_code;?></td>
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
