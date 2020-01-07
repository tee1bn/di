<?php
$page_title = "CMS";
 include 'includes/header.php';?>


    
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">CMS</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">CMS</li>
                        </ol>
                    </div>
                  
                </div>
            
                 <div class="row">
                  
                      <div class="col-12">
                        
                        <?php foreach (CMS::all() as $key => $page):?>

                            <div class="card">

                            <div class="card-header collapsed" aria-expanded="false" data-toggle="collapse" data-target="#demo<?=$page->id;?>">
                              <a href="javascript:void(0);">Edit <?=$page->name;?> </a>
                            </div>
                              <div class="card-body collapse" id="demo<?=$page->id;?>">
                              <form 
                                id="sub_form"
                                class="ajax_form"
                                  action="<?=domain;?>/admin/update_cms" method="post" >
                                  <div class="card-body">


                                    <input type="" style="display: none;" name="criteria" value="<?=$page->criteria;?>">
                                    
                                      <div class="form-group">
                                        <label><?=$page->name;?></label>
                                        <p>
                                          <small><?=$page->description;?></small>
                                        </p>
                                         <textarea id="editor1<?=$page->id;?>" required=""
                                          name="settings" class="form-control editor1"><?=$page->settings;?></textarea>
                                      </div>

                                    <button class="btn  btn-success pull-right">Save</button>


                                  </div>                           



                                  
                              </form>
                            </div>
                          </div>



                    <script>    
                        CKEDITOR.replace('editor1<?=$page->id;?>' );
                    </script>


                    <?php endforeach;?>


                      </div>

                    


                </div>



<?php include 'includes/footer.php';?>
<script>
    $(function() {
        $('#myTable').DataTable();
    });
</script>
