<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 
 <?=$this->session->flashdata('gagal')?>
     <?=$this->session->flashdata('pesan')?>


            <div class="content">
                <div class="row"" data-background-color="orange">
    <div class="col-md-12 text-left"  data-background-color="orange">
        <a href="<?php echo site_url('Workshop/tambah'); ?>">  <button type="submit" class="btn btn-primary" data-background-color="orange" style="margin-top:0px;margin-bottom:20px"  data-background-color="orange"> Tambah Workshop</button> </a>
    </div>
</div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"> <!--ungu-->
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">List Workshop</h4>
                                   <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID Workshop</th>
                                            <th>Nama Workshop</th>
                                            <th>Tempat</th>
                                            <th>Tanggal</th>
                                             <th>Waktu</th>
                                             <th>Harga</th>
                                             <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                        	  <?php foreach ($workshop as $key => $value) {?>


     <tr>
        <td> <?php echo $value->id_workshop; ?></td>
        <td> <?php echo $value->nama_workshop; ?></td>
        <td align=center> <?php echo $value->tempat; ?></td>
        <td align=center> <?php echo $value->tanggal; ?></td>
         <td align=center> <?php echo $value->waktu; ?></td>
         <td align=center> <?php echo $value->harga; ?></td>
    <td> <a href="<?php echo site_url('Workshop/delete/'.$value->id_workshop); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
    <a href="<?php echo site_url('Workshop/edit/'.$value->id_workshop); ?>" class="btn btn-warning"> 
                <i class="fa fa-pencil"> </i> </a>

</td>
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

                           


