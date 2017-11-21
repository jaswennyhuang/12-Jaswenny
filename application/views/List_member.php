<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>


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
                                        <thead class="text-primary">
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.HP</th>
                                            <th>Username</th>
                                             <th>Password</th>
                                             <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($member as $key => $value) {?>

                                            <tr>
                                                 <td> <?php echo $value->nama; ?></td>
        <td> <?php echo $value->alamat; ?></td>
        <td align=center> <?php echo $value->nohp; ?></td>
           <td align=center> <?php echo $value->username; ?></td>
        <td align=center> <?php echo $value->password; ?></td>
       
     
        <td> <a href="<?php echo site_url('Member/delete/'.$value->username); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
             
   
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
                </div><br><br><br>
                  <?php $this->load->view('Footer_admin');?> 
            </div>
            
            </html>

                           


