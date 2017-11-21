

<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 
 <?=$this->session->flashdata('gagal')?>
     <?=$this->session->flashdata('pesan')?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"> <!--ungu-->
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">List Transaksi</h4>
                                   <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>ID Workshop</th>
                                            <th>Username</th>
                                             <th>Bukti Pembayaran</th>
                                             <th>Status</th>
                                             <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                        	 <?php foreach ($transaksi as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value->id_transaksi; ?></td>
                    <td><?php echo $value->tgl_transaksi; ?></td>
                    <td><?php echo $value->id_workshop; ?></td>
                    <td><?php echo $value->username; ?></td>
                    <td>
 <?php if($value->bukti_transfer == 'belum upload'){
                        echo $value->bukti_transfer;} 

                        else{ ?>
                        <img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/Buktitransfer/<?php echo $value->bukti_transfer; ?>"></td>
                        <?php } ?>
                    <td><?php echo $value->status; ?></td>
                    <td>
                        
                            <a href="<?php echo site_url('Transaksi/edit/'.$value->id_transaksi); ?> " class="btn btn-warning">
                            <i>Edit </i>
                        </a>
                        <a href="<?php echo site_url('Transaksi/download/'.$value->id_transaksi); ?> " class="btn btn-danger">
                            <i>Download</i>
                        </a>

                    </td>
                </tr>
                <?php } ?> 

     
   

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php $this->load->view('Footer_admin');?> 
                </div>

            </div>
            </html>

                           


