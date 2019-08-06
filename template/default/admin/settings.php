<?php
$page_title = "Settings";
 include 'includes/header.php'



 ;?>

<script type="text/javascript" src="<?=$this_folder;?>/angularjs/angular.js"></script>
<script>
    $base_url = '<?=domain;?>';
</script>
<script type="text/javascript" src="<?=$this_folder;?>/angularjs/settings.js"></script>


    <div  ng-controller="Settings">
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
                 <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">General Settings</a>
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


                <div ng-repeat="($index, $currency) in $currency_settings" class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#currency{{$index}}">
                                <a href="javascript:void;">{{$currency.name}} Settings</a>
                            </div>
                            <div class="card-body row collapse" id="currency{{$index}}">

                                <div ng-repeat="($key, $setting) in $currency.settings" class="form-group col-lg-3">
                                    <span class="badge badge-secondary">{{$index+1}}</span>
                                    <label>{{$key}}</label>
                                    <input type="" placeholder="{{$key}}" ng-model="$currency.settings[$key]" class="form-control">
                                </div>                              

                                
                                <form action="<?=domain;?>/settings/update_currency_settings" method="post" class="ajax_form" >
                                    
                                    <input type="hidden" value="{{$currency.id}}" name="id">
                                    <textarea style="display: none;" class="form-control" name="settings">{{$currency.settings}}</textarea>
                                    <div class="text-center col-12">
                                        <button type="submit" class="btn btn-success">Update </button>
                                    </div>
                                </form>

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
