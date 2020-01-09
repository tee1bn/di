<?php
$page_title = "Settings";
 include 'includes/header.php';?>

<script type="text/javascript" src="<?=$this_folder;?>/angularjs/angular.js"></script>
<script>
    $base_url = '<?=domain;?>';
</script>
<script type="text/javascript" src="<?=$this_folder;?>/angularjs/settings.js"></script>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Settings</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                  
                </div>
             



                <form >
                 <div class="row" ng-controller="Settings">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">Settings</a>
                            </div>
                            <div class="card-body row collapse" id="demo">

                                <div ng-repeat="($key, $setting) in $site_settings" class="form-group col-lg-3">
                                    <span class="badge badge-secondary">{{$index+1}}</span>
                                    <label>{{$key}}</label>
                                    <input type="" placeholder="{{$key}}" ng-model="$site_settings[$key]" class="form-control">
                                </div>                              

                                
                                <div class="text-center col-12">
                                    <button class="btn btn-success" ng-click="update_site_settings()">Update 
                                        <i class="fa fa-cog"></i></button>
                                </div>

                             </div>

                        </div>
                    </div>
                </div>
            </form>


             <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header"  data-toggle="collapse" data-target="#ph_packages">
                            <a href="javascript:void;">PH Packages</a>
                        </div>
                        <div class="card-body row collapse show" id="ph_packages">
                            <form action="<?=domain;?>/admin/update_packages" method="post" >
                                <table class="table table-striped">
                                    <thead>
                                        <th>sn</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Roi(%)</th>
                                        <th>N-Times</th>
                                        <th>Spread (Days)</th>
                                        <th>Available</th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach (PhPackage::all() as $key => $package):?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><input type="" name="package[<?=$package->id;?>][name]" value="<?=$package->name;?>"></td>
                                            <td><input style="width:120px;" type="" name="package[<?=$package->id;?>][price]" value="<?=$package->price;?>"></td>
                                            <td><input style="width:120px;" type="" name="package[<?=$package->id;?>][roi_percent]" value="<?=$package->roi_percent;?>"></td>
                                            <td><input style="width:120px;" type="" name="package[<?=$package->id;?>][n]" value="<?=$package->n;?>"></td>
                                            <td><input style="width:120px;" type="" name="package[<?=$package->id;?>][interval_in_days]" value="<?=$package->interval_in_days;?>"></td>
                                            <td><input style="width:120px;" type="checkbox" <?=($package->is_available== 'on')?'checked':'';?> name="package[<?=$package->id;?>][is_available]"></td>
                                        </tr>
                                        <?php endforeach ;?>
                                    </tbody>
                                </table>



                                <div class="text-center col-12">
                                    <button class="btn btn-success">Update </button>
                                </div>

                            </form>
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
