<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Classy Register Form Responsive Widget Template :: W3layouts</title>
	<?=$this->session->flashdata('gagal')?>
	<?=$this->session->flashdata('pesan')?>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Classy Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="<?php echo base_url('assets/css3/style.css');?>" rel="stylesheet" type="text/css" media="all">


<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body background="<?php echo base_url('assets/images/bb.jpg');?>">
	<div class="header">
		<h1></h1>
	</div>
	<div class="w3-main">
		<!--<div style="color:white;width: 300px;background:#f77474;text-align: center;margin:auto;"> -->

			
			<!--</div>-->
			<!-- Main -->
			<div class="about-bottom main-agile book-form">

				<div class="alert-close"> </div>


				<h2 class="tittle" style="font-size: 40px;">LOGIN</h2>
				<form action="#" method="post">
					<div class="form-date-w3-agileits">

						<label> Username </label>
						<input type="text" name="username" class="form-control" placeholder="Input username" >
						<label> Password </label>
						<input type="password" name="password" placeholder="Input password" required="">


					</div>
					<div class="make wow shake">
						<input type="submit" value="Login">

						<p style="font-size: 15px;color:white;margin-top: 30px"> Do not have any account? <a href = "<?php echo site_url('Member/tambah'); ?>" style="color:#ffb310";>  REGISTER </a>  </p>  
					</div>
				</form>
			</div>
			<!-- //Main -->
		</div>
		<!-- footer -->
		<!-- footer -->
<div class="footer-w3l">
	<p>&copy; 2017 Classy Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!-- //footer -->
		<!-- //footer -->
		<!-- js-scripts-->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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