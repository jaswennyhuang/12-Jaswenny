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
                                    <h4 class="title">List Member</h4>
                                   <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead align=center>
      <tr>
         <th>ID Pesan</th>
         <th>Tanggal</th>
         <th>Pengirim</th>
         <th>Isi Pesan</th>
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>
  <?php foreach ($pesan as $key => $value) {?>


     <tr>
        <td> <?php echo $value->id_pesan; ?></td>
        <td> <?php echo $value->tgl_pesan; ?></td>
        <td align=center> <?php echo $value->username; ?></td>
        <td align=center> <?php echo $value->isi_pesan; ?></td>
        <td> <a href="<?php echo site_url('Pesan/delete/'.$value->id_pesan); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
   
        </td>
            </td>
        </tr>
        <?php } ?>
    </tbody>


</table>


</div>



     
   

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <?php $this->load->view('Footer_admin');?> 
                    </div>

                </div>

            </div>
            </html>

                           


