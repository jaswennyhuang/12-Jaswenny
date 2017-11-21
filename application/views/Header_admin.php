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

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"> <center>
                
                    <?php echo $user= $this->session->userdata('username'); ?> <br> <a href="<?php echo site_url('Admin/edit/'.$user); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                     <li>
                         <a href="<?php echo site_url('Login/back2'); ?>">
                            <i class="material-icons">person</i>
                            <p>Beranda</p>
                        </a>
                    </li>

                     <li> <!--  class="active"> -->
                          <a href="<?php echo site_url('Member'); ?>">
                            <i class="material-icons">library_books</i>
                            <p>List Member</p>
                        </a>
                    </li>
                    <li>
                         <a href="<?php echo site_url('Workshop'); ?>">
                            <i class="material-icons">library_books</i>
                            <p>List Workshop</p>
                        </a>
                    </li>
                    <li>
                         <a href="<?php echo site_url('Transaksi'); ?>">
                            <i class="material-icons">library_books</i>
                            <p>List Transaksi</p>
                        </a>
                    </li>
                    <li>
                          <a href="<?php echo site_url('Pesan'); ?>">
                            <i class="material-icons">library_books</i>
                            <p>List Pesan</p>
                        </a>
                    </li>
                     
                     <li>
                        <a href="<?php echo site_url('Login/logout'); ?>">
                            <i class="material-icons">web_asset</i>
                            <p>Logout</p>
                        </a>
                    </li>
                        
            </div>
        </div>
        <div class="main-panel">
            
           
        
<!--   Core JS Files   -->
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

</html>