<!doctype html>
<html lang="en">

<head>
 <?=$this->session->flashdata('gagal')?>
 <?=$this->session->flashdata('pesan')?>
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
<!--     Fonts and icondds    d -->
<body style="background-color: #e6ecf7">
 
        <div class="content" style="margin-left:300px; margin-top: 40px" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title">EDIT PROFILE</h4>
                                <p class="category"></p>
                            </div>
                            <div  class="card-content">
                                <form action="<?php echo site_url('Member/edit_aksi')?>" method="POST">
                                    <div class="">
                                        <div class="">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Username </label>
                                                <?php print_r($username) ?>
                                                <input type="hidden" name="username" class="form-control" placeholder="" required value="<?php echo $username; ?>">                                                </div>

                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password </label>

                                                        <input type="text" name="password" class="form-control" placeholder="" required value="<?php echo $password; ?>" >
                                                    </div>

                                                    <div class="">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Name </label>

                                                            <input type="text" name="nama" class="form-control" placeholder="" required value="<?php echo $nama; ?>">
                                                        </div>

                                                        <div class="">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Address </label>

                                                                <input type="text" name="alamat" class="form-control" placeholder="" required value="<?php echo $alamat; ?>">
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Handphone </label>

                                                                    <input type="text" name="nohp" class="form-control" placeholder="" required value="<?php echo $nohp; ?>">
                                                                </div>


                                                            </div>
                                                            <div class="row">

                                                            </div>
                                                            <a onclick="return confirm('Edit your profile?')">
                                                                <button type="submit" class="btn btn-primary pull-right" data-background-color="orange">Update </button></a>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                 <?php $this->load->view('Footer_admin');?> 
                            </div>


                        </div>
                    </div>
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

</body>
