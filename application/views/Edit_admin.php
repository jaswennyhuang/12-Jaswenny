<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 
   

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title" style="font-size: 25px;font-weight:bold;">Edit Admin</h4>
                                   
                                </div>
                                <div class="card-content">
                                    <form action="<?php echo site_url('Admin/edit_aksi')?>" method="POST">
                                        <div class="">
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username </label>
                                                    <?php print_r($username) ?>
<input type="hidden" name="username" class="form-control" placeholder="" required value="<?php echo $username; ?>">                                                </div>

                                                <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password </label>
                                                   
        <input type="text" name="password" class="form-control" placeholder="" required value="<?php echo $password; ?>">
                                                </div>
                                           
                                            
                                            
                                        </div>
                                        <div class="row">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right" data-background-color="orange">Update </button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
