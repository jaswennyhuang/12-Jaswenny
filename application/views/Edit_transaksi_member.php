<!DOCTYPE html>

<html lang="en">
<head>
<title>ss</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="<?php echo base_url('assets/css3/style.css');?>" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body background="<?php echo base_url('assets/images/bb.jpg');?>">

<div class="w3-main">
  <!-- Main -->
  <div class="about-bottom main-agile book-form">
    <div class="alert-close"> </div>
    <h2 class="tittle" style="font-size: 40px;">Upload Your Payment </h2>

            <?php echo form_open_multipart('Transaksi/edit_aksi_sisi_member');?>

    <input type="hidden" name="id_transaksi" class="form-control" placeholder="" required value="<?php echo $id_transaksi; ?>">
    <input type="hidden" name="username" class="form-control" placeholder="" required value="<?php echo $username; ?>">

     <div class="form-group label-floating">
      <label class="control-label"></label>
       <input type="file" name="bukti_transfer" class="form-control" placeholder="" required" >




      <div class="make wow shake">
        <br><br>
          <input type="submit" value="SEND">
      </div>

      </div>         
<?php echo form_close(); ?>
                            

  </div>


                              
<div class="footer-w3l">
  
<!-- //footer -->
<!-- js-scripts-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="<?php echo base_url('assets/js2/jquery-2.1.4.min.js');?>"></script>
    <script>$(document).ready(function(c) {
    $('.alert-close').on('click', function(c){
      $('.main-agile').fadeOut('slow', function(c){
        $('.main-agile').remove();
      });
    });   
  });
  </script>
<!-- //js-scripts-->
