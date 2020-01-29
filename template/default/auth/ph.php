<?php
$page_title = "Pledge";
$settings = SiteSettings::site_settings();
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Pledge</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Pledge</li>
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

                      <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=CMS::fetch('ph_warning');?>

                  </div>

                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#packages">
                                <a href="javascript:void;">Click to Pledge</a>
                            </div>
                            <div class="card-body collapse" id="packages">
                               <div class="row pricing-plan">
                                   <?php foreach (PhPackage::Available()->get() as  $package):?>

                                   <div class="col-md-4 no-padding">
                                       <div class="pricing-box">
                                           <div class="pricing-body border-left">
                                               <div class="pricing-header">
                                                   <h4 class="text-center">
                                                      Pledge <span class="price-sign"><?=$currency;?></span>
                                                       <?=MIS::money_format($package->price);?>
                                                   </h4>
                                                   <h2 class="text-center" style="text-transform: capitalize;">
                                                       <?=$package->name;?>
                                                   </h2>
                                                   <!-- <p class="">One time</p> -->
                                               </div>
                                               <div class="price-table-content">
                                                   <?php 
                                                       $return = MIS::money_format($package->Return);
                                                       $worth = MIS::money_format($package->Worth);
                                                   foreach 
                                                   ([
                                                       " Get <b>$currency{$worth}</b> ",
                                                       "<b>at {$package->n}</b> times of $currency{$return} <br> spread at <b>{$package->interval_in_days}</b> days
                                                       interval "
                                                   ] as $feature):?>
                                                       <div class="price-row" 
                                                           style="text-transform: capitalize;">
                                                           <i class="icon-check"></i>
                                                            <?=$feature;?>
                                                       </div>
                                                   <?php endforeach;?>
                                                  
                                                   <div class="price-row">
                                                 
                                                       <form action="<?=domain;?>/user/create_ph_request" 
                                                       id="upgrade_form<?=$package->id;?>"
                                                       method="post"
                                                       class="ajax_form">
                                                       <input type="hidden" name="package_id" value="<?=$package->id;?>">
                                                           <button  class="btn btn-success waves-effect waves-light mt-3">Pledge</button>
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <?php endforeach;?>
                               </div>


                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">Pledge Requests</a>
                            </div>
                            <div class="card-body collapse show" id="demo">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <tbody>
                                            <?php $i=1; foreach ($this->auth()->PhRequests as $ph_request) :?>


                                            <tr>

                                              <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">             
                                                <?php if($ph_request->matched->isNotEmpty()) :?>
                                                    <a class="float-right" href="<?=domain;?>/user/ph_matches/<?=$ph_request->id;?>">
                                                        <span class="btn btn-sm label-warning">Open</span>
                                                    </a>
                                                <?php endif;?>
                                     
                                                    <span style="margin-right: 7px;">
                                                         #<?=$ph_request->id;?>
                                                    </span>

                                                      <strong> Amt: <?=$currency;?><?=MIS::money_format($ph_request->amount);?></strong>
                                                       <br>
                                                      <span class="float-">
                                                        <span class="badge badge-secondary">
                                                            <?=date('M j, Y h:iA', strtotime($ph_request->created_at));?>
                                                        </span>
                                                           <?=$ph_request->status();?>
                                                          
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
