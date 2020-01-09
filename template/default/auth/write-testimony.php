<?php
$page_title = "Letter of Happiness";
 include 'includes/header.php';?>


    
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Letter of Happiness</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Letter of Happiness</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo1">
                                <a href="javascript:void;">
                                        Compose Your Letter <i class="fa fa-plus"></i>
                                </a>
                            </div>

                            <div class="card-body collapse" id="demo1">

                                <form action="<?=domain;?>/user/create_testimonial" method="post" >
                                  <div class="form-group">
                                    
                                    <div class="">
                                      <textarea class="form-control textarea" name="testimony" placeholder="" style="height: 150px"></textarea>
                                    </div>
                                  </div>

                                  <div class="">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                 <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;">Lists of Letters</a>
                            </div>
                            <div class="card-body collapse show" id="demo">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover">
                                        <tbody>
                                            <?php $i=1; foreach ($this->auth()->testimonies as $testimony) :?>
                                            <tr>
                                              <div class="alert bg-dark text-white  alert-dismissible mb-2 " role="alert">             
                                                    <a class="float-right" href="<?=domain;?>/user/edit-testimony/<?=$testimony->id;?>">
                                                        <span class="btn btn-sm label-warning">Open</span>
                                                    </a>
                                            
                                                    <span style="margin-right: 7px;">
                                                         #<?=$testimony->id;?>
                                                    </span>
                                                        <span class="badge badge-secondary">
                                                            <?=date('M j, Y h:iA', strtotime($testimony->created_at));?>
                                                        </span>
                                                        <?=$testimony->status();?>

                                                      <p>
                                                          <small><?=$testimony->content;?></small>
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

                
                </div>
<?php include 'includes/footer.php';?>
<script>
    $(function() {
        $('#myTable').DataTable();
    });
</script>
