<!doctype html>
<html lang="en">
<head>


   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/css/material-dashboard.css')?>" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css')?>" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

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
                                    <table class="table" >
                                        <thead class="text-primary" >
                                          <?php  $username =$this->session->userdata('username');?>

                                            <th style="color:orange;font-weight: bold">Transaction ID</th>
                                            <th style="color:orange;font-weight: bold">Date</th>
                                            <th style="color:orange;font-weight: bold">Workshop</th>
                                             <th style="color:orange;font-weight: bold">Participant</th>
                                             <th style="color:orange;font-weight: bold">Payment</th>
                                             <th style="color:orange;font-weight: bold">Status</th>
                                             <th style="color:orange;font-weight: bold">Upload</th>
                                        </thead>
                                        <tbody>
                                           
 <?php foreach ($transaksi as $key => $value){

                ?>
                <tr>
                    <td><?php echo $value->id_transaksi; ?></td>
                    <td><?php echo $value->tgl_transaksi; ?></td>
                    <td><?php echo $value->nama_workshop; ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td>
                        <?php if($value->bukti_transfer == 'belum upload'){
                        echo $value->bukti_transfer;} 

                        else{ ?>

                         <img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/Buktitransfer/<?php echo $value->bukti_transfer; ?>">
                     </td>
                        <?php } ?>
                        
                    <td>

                        <?php echo $value->status; ?>
                            
                    </td>

                    <td>
                      <?php if($value->status == 'valid'){ ?>
                        
                       <center> <i>PAYMENT DONE</i> <br>
                        <i>PLEASE COME TO WORKSHOP ONTIME </i> </center>
                         <?php } 

                       else{ ?>

                            <a href="<?php echo site_url('Transaksi/edit_sisi_member/'.$value->id_transaksi.'/'.$value->username); ?> " class="btn btn-warning">
                            <i>Upload </i>
                        </a>

                  </td>
                           <?php } ?>
                        
                       

                    </td>
                </tr>
                <?php } ?>

     
   

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          <!--  <a href="<?php echo site_url('Login'); ?> " class="btn btn-warning">
                            <i>Home </i> -->
            </html>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/material.min.js')?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/js/chartist.min.js')?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url('assets/js/arrive.min.js')?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url('assets/js/perfect-scrollbar.jquery.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/bootstrap-notify.js')?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url('assets/js/material-dashboard.js?v=1.2.0')?>"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets//js/demo.js"')?>"</script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

                           


