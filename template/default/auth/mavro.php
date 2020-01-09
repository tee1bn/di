<?php
$page_title = "Mavro";
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Mavro</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Mavro</li>
                        </ol>
                    </div>
                  
                </div>
            

                <?php
                $mavros =  $this->auth()->mavros;
                ;?>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">Mavro</a>
                                <span class="float-right">Total:
                                    <?=$currency;?><?=$this->money_format($mavros->sum('amount'));?></span>
                            </div>
                            <div class="card-body collapse show" id="demo">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <tbody>
                                            <?php $i=1; foreach ($mavros as $mavro) :?>

                                            <tr>

                                              <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">
                                                   
                                                    <span class="badge badge-success float-right">
                                                       <small>
                                                        ROI
                                                       </small>
                                                         <?=$currency;?><?=MIS::money_format($mavro->package->Worth);?>
                                                    </span>

                                                    <span style="margin-right: 7px;">
                                                         #<?=$mavro->id;?>
                                                    </span>

                                                      <strong> Amt: <?=$currency;?><?=MIS::money_format($mavro->amount);?></strong>
                                                       <br>
                                                      <span class="float-">Completed:
                                                        <span class="badge badge-secondary">
                                                            <?=date('M j, Y h:iA', strtotime($mavro->fufilled_at));?>
                                                        </span>
                                                          
                                                      </span><br>


                                                  <div style="position:  10px;right: 25px;">
                                                        <span class="progress mt-1 ">
                                                            <span class="progress-bar active progress-bar-striped bg-success" style="width: <?=$mavro->maturity_growth()['maturity_growth'];?>%; height:15px;" role="progressbar"><?=$mavro->maturity_growth()['received'];?>
                                                            </span>
                                                        </span>
                                                    </div>
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
