<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Edit Transaksi</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form action="<?php echo site_url('Transaksi/edit_aksi')?>" method="POST">
                                        <div class="">
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">ID Transaksi </label>
                                                    <?php print_r($id_workshop) ?>
<input type="hidden" name="id_transaksi" class="form-control" placeholder="Inputkan nama" required value="<?php echo $id_transaksi; ?>">                                                </div>

                                                <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal </label>
                                                    <?php print_r($tgl_transaksi) ?>
        <input type="hidden" name="tgl_transaksi" class="form-control" placeholder="Inputkan nama" required value="<?php echo $tgl_transaksi; ?>">
                                                </div>
                                           
                                            
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">ID Workshop</label>
                                                    <?php print_r($id_workshop) ?>
                                                        <input type="hidden" name="id_workshop" class="form-control" placeholder="" required value="<?php echo $id_workshop ; ?>">

    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <?php print_r($username) ?>
                                                        <input type="hidden" name="username" class="form-control" placeholder="" required value="<?php echo $username ; ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="">
                                                <div class="form-group label-floating">

                                                   
    <div class="form-group">
      <label class="control-label">Status</label>
      <select class="form-control" id="status" name="status">
          <option value="belum valid">belum valid</option>
        <option value="valid">valid</option>
      
       
      </select>
                                                   
                                                </div>
                                            </div>
                                          
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
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
