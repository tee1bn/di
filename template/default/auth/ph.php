<?php
$page_title = "Provide Help";
$settings = SiteSettings::site_settings();
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Provide Help</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Provide Help</li>
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

                            <div class="card-header"  data-toggle="collapse" data-target="#packages">
                                <a href="javascript:void;">PH Packages</a>
                            </div>
                            <div class="card-body collapse show" id="packages">
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
                                                   foreach 
                                                   ([
                                                       " Get <b>$currency{$return}</b> ",
                                                       "<b>{$package->n}</b> times <br> spread at <b>{$package->interval_in_days}</b> days
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
                                                           <button  class="btn btn-success waves-effect waves-light mt-3">Provide help</button>
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
                                <a href="javascript:void;">Provide Help Requests</a>
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
