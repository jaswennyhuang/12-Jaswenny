<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Tambah Workshop</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form action="<?php echo site_url('Workshop/tambah_aksi')?>" method="POST">
                                        <div class="">
                                            <div class="">
                                                

                                                <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Workshop </label>
                                                    
    <input type="text" name="nama_workshop" class="form-control" placeholder="" required value="<?php echo $nama_workshop; ?>">
                                                </div>
                                           
                                            
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Deskripsi</label>
                                                  <input type="text" name="deskripsi" class="form-control" placeholder="" required value="<?php echo $deskripsi ; ?>">
    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tempat</label>
                                                 <input type="text" name="tempat" class="form-control" placeholder="" required value="<?php echo $tempat ; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal</label>
                                                    <input type="text" name="tanggal" class="form-control" placeholder="" required value="<?php echo $tanggal; ?>">
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Waktu</label>
                                                    <input type="text" name="waktu" class="form-control" placeholder="" required value="<?php echo $waktu ; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Harga</label>
                                                   <input type="text" name="harga" class="form-control" placeholder="" required value="<?php echo $harga ; ?>">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        </div>
                                        <div class="row">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right" data-background-color="orange">Tambah </button>
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
