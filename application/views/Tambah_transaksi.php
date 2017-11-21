<!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

  <h1><?php $username=$this->session->userdata('username');
 ?></h1>

<div class="w3-main">
  <!-- Main -->
  <div class="about-bottom main-agile book-form">
    <div class="alert-close"> </div>
    <h2 class="tittle" style="font-size: 40px;">Workshop Detail</h2>
<?php $username=$this->session->userdata('username');

?>

    <form action="<?php echo site_url('Transaksi/tambah_aksi'); ?>" method="post">

      
        <?php foreach ($workshop as $key => $value) {?>

                                        <div class="form-group">
                                        <input name="id_workshop" type="hidden" class="form-control" placeholder="" value="<?php echo $value->id_workshop;?>">
                                        </div>

                                     


                                         <div class="form-group">
                                        <input name="username" type="hidden" class="form-control" placeholder="" value="<?php echo $this->session->userdata('username'); ?>">
                                        </div>
                                        

                                        <div class="form-group">
                                        <input name="bukti_transfer" type="hidden" class="form-control" placeholder="" value="belum upload">
                                        </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Workshop <small>:</small> </label> <label><?php echo $value->nama_workshop; ?></label>
                                        <input name="nama_workshop" type="hidden" class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Description <small>:</small></label><label><?php echo $value->deskripsi; ?></label>
                                        <input name="deskripsi" type="hidden" class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Place <small>:</small></label><label><?php echo $value->tempat; ?></label>

                                        <input name="tempat" type="hidden" class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Date <small>:</small></label><label><?php echo $value->tanggal; ?></label>

                                        <input name="tanggal" type="hidden" class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Time <small>:</small></label><label><?php echo $value->waktu; ?></label>

                                        <input name="waktu" type="hidden" class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                        <label style="color:#ffb310";>Price <small>:</small></label><label><?php echo $value->harga; ?></label>

                                        <input name="harga" type="hidden" class="form-control" placeholder="">
                                      </div>

                                    

                                      <?php } ?>


<?php if($username==null){?>
<div class="make wow shake">
          <button><a href="<?php echo site_url('Login') ?>">JOIN</a></button>
      </div>
  

  <?php } else{ ?>
      <div class="make wow shake">
          <input type="submit" value="JOIN">
      </div>
    </form>
<?php } ?>


  </div>
  <!-- //Main -->
</div>
<!-- footer -->
<div class="footer-w3l">
  <p>&copy; 2017 Classy Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
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
</body>
</html>