<?php
$page_title = "Provide Assistance";
$settings = SiteSettings::site_settings();
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Provide Assistance</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Provide Assistance</li>
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
                                                    Provide Assistance <i class="fa fa-plus"></i>
                                            </a>
                                        </div>

                                        <div class="card-body card-body-bordered collapse show" id="demo1" >

                                            <form action="<?=domain;?>/user/create_ph_request" method="post">
                                                
                                                <div class="form-group">
                                                    <label>Amount (<?=$currency;?>)</label>
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend"></span>

                                                    <select name="amount" class="form-control" required="">
                                                            <option value="">Select Amount</option>
                                                        <?php foreach ($possible_capitals as $amount):?>
                                                            <option value="<?=$amount->capital;?>"><?=$amount->capital;?></option>
                                                        <?php endforeach;?>
                                                    </select>

                                                  <!--   <input id="tch3" type="number" min="<?=$settings['minimum_ph'];?>" required="" value="<?=Input::old('amount');?>" name="amount" 
                                                    class="form-control"> -->
                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-success " type="submit">Provide Assistance</button>
                                                    </span>
                                                </div> 

                                                <small class="text-danger"><?=Input::inputError('amount');?></small><br>

                                                <small class="text-danger">* Minimum Amount is 
                                                    <?=$currency;?><?=$this->money_format($settings['minimum_ph']);?> and Maximum Amount is 
                                                    <?=$currency;?><?=$this->money_format($settings['maximum_ph']);?>
                                                </small>
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
                                <a href="javascript:void;">Provide Assistance Requests</a>
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
                                            <?php $i=1; foreach ($this->auth()->PhRequests as $ph_request) :?>
                                            <tr>
                                                <td><?=$ph_request->id;?></td>
                                                <td><?=$this->money_format($ph_request->amount);?></td>
                                                <td>
                                                    <span class="badge badge-sm badge-secondary">
                                                        <?=$ph_request->created_at->toFormattedDateString();?></td>
                                                    </span>
                                                <td><?=$ph_request->status();?></td>
                                                <td>
                                                    <?php if($ph_request->matched->isNotEmpty()) :?>
                                                        <a href="<?=domain;?>/user/ph_matches/<?=$ph_request->id;?>">
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
