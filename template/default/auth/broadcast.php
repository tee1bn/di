<?php
$page_title = "Broadcast";
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Broadcast</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Broadcast</li>
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
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <tbody>
                                            <?php $i=1; foreach (BroadCast::live() as $broadcast) :?>


                                            <tr>

                                              <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">             
                                                    <small class="badge badge-secondary"><?=$i;?></small>
                                                     <span class="badge badge-info">
                                                            <?=date('M j, Y h:iA', strtotime($broadcast->created_at));?>
                                                        </span>
                                                    <p>
                                                       <small>
                                                        <?=$broadcast->broadcast_message;?>
                                                       </small>
                                                    </p>

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
