<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />




<title</title>
<link href="<?php echo base_url('assets/css/portfolio.css')?>" rel="stylesheet" type="text/css" >

	



<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url('assets/css/cobox.css')?>" rel="stylesheet" type="text/css">

<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- font links -->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<!-- /font links -->	
<!-- js files -->
<script src="<?php echo base_url('assets/js/modernizr.custom.js')?>" ></script>
<!-- /js files -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav link-effect">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#contact">Contact</a></li>
				<?php $username=$this->session->userdata('username');
				if($username==null){ ?>
				<li><a href="#workshop">Workshop</a></li>
					<li> <a class="" data-toggle="modal"   href="<?php echo site_url('Login'); ?>";">Login</a></li>
				<?php }
				else { ?>
				<li><a href ="<?php echo site_url('Member/edit/'.$username); ?>"> <?php echo $username; ?> </a></li>
				<li> <a class="" data-toggle="modal"   href="<?php echo site_url('Login/logout'); ?>";">Logout</a></li>

				<?php } ?>
				
				
				
              </ul>

              <!--LOGIN--> 
		  <!--end login -->
            </div>
          </div>
        </nav>

      </div>
    </div>
<!-- Banner -->
<div class="banner" style="background:url(<?php echo base_url('assets/images/ratnaa.jpg') ?>)">
	<ul class="rslides" id="slider">
		<li>
			<div class="banner-info">
				<h3>Its My Life</h3>
				<span class="line1"></span>
				<p>Rattnaliu Makeup Artist</p>
				<span class="line2"></span>
				<div class="social-icons">
					
				</div>
			</div>	
		</li>
		<li>
			<div class="banner-info">
				<h3>My Passion</h3>
				<span class="line1"></span>
				<p>Rattnaliu Makeup Artist</p>
				<span class="line2"></span>
				<div class="social-icons">
				
				</div>
			</div>
		</li>
		<li>
			<div class="banner-info">
				<h3>My Life Style</h3>
				<span class="line1"></span>
				<p>Rattnaliu Makeup Artist</p>
				<span class="line2"></span>
				<div class="social-icons">
					
				</div>
			</div>
		</li>
	</ul>	
</div>
<!-- /Banner -->
<!-- About -->
<div class="about-me" id="about"> 
	<h3 class="text-center slideanim">About Me</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="mydetails slideanim text-center">
					<img class="img-circle img-responsive" src="<?php echo base_url('assets/images/hello.png')?>" alt="Generic placeholder image" width="200" height="180">
					<h3>Ratna Liu</h3>
					<p>Makeup Artist</p>
					<!--<div class="social-icons">
						<a href="#"><span class="facebook"></span></a>
						<a href="#"><span class="twitter"></span></a>
						<a href="#"><span class="linkedin"></span></a>
						<a href="#"><span class="googleplus"></span></a>
					</div> -->
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="myskills slideanim">
					<h3 class="text-center">HELLO!</h3>
					<p class="skill-text" style="text-align:justify;"> Thank you for stopping by! I'm Ratna liu, a Makeup Artist, located in Pekanbaru, Indonesia.

My passion for makeup artistry began at a very young age.  I can remember going to my best friend’s home and we played with the make up stuff all day long. 



I've worked and learned a lot about make up for last 3 years. My career started when I began working with bridal company and ended as a freelancer now. 
</p>

<p class="skill-text" style="text-align:justify;">My passion is fueled by my desire to help a woman’s inner beauty shine on the outside.  Throughout my career, I am rewarded by the confidence a woman exudes after her makeover.  My eyes light up still today when I transform someone.  I believe looking good is your best revenge.

There is a sexy glamorous woman inside of us all … I want YOU to ‘dare to indulge.’</p>
					
				</div>	
			</div>
		</div>	
	</div>	
</div>
<!-- /About -->
<!-- Portfolio -->
	<div class="myportfolio" id="portfolio">
		<h3 class="text-center slideanim">My Portfolio</h3>
		<p class="text-center slideanim"></p>
		<section class="vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure><img class="slideanim" src="<?php echo base_url('assets/images/portfolio/rat1.jpg')?>" alt="img01"/></figure>
						<figure><img class="slideanim" src="<?php echo base_url('assets/images/portfolio/rat2.jpg')?>" alt="img05"/></figure>
						<figure><img class="slideanim" src="<?php echo base_url('assets/images/portfolio/rat3.jpg')?>" alt="img08"/></figure>
						
					</div>

				</div>
				<!-- /grid-wrap -->
				<div class="content">
				
						<div class="mygallery" id="">
	<h3 class="text-center slideanim">Wedding MakeUp</h3>
	<div class="text-center"> 
		<a href="<?php echo base_url('assets/images/portfolio/7.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/7.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:290px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/8.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/8.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:290px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/11.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/11.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:290px;height:410px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/13.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/13.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:290px;height:410px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/4.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/4.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:290px;height:410px;"</a>

		<a href="<?php echo base_url('assets/images/portfolio/16.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/16.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:290px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/3.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/3.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:290px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/5.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/5.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:290px;height:410px;"></a>
		
	
						
					 </div></div>


						<div class="mygallery" id="">

						<h3 class="content-text">Party MakeUp</h3>
					<div class="text-center"> 
		<a href="<?php echo base_url('assets/images/portfolio/14.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/14.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:293px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/05.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/05.png')?>" alt="example-2" class="img-responsive slideanim" style="width:293px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/h.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/h.png')?>" alt="example-3" class="img-responsive slideanim" style="width:293px;height:410px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/02.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/02.png')?>" alt="example-3" class="img-responsive slideanim" style="width:293px;height:410px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/m.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/m.png')?>" alt="example-3" class="img-responsive slideanim" style="width:293px;height:410px;"</a>

		<a href="<?php echo base_url('assets/images/portfolio/6.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/6.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:293px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/9.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/9.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:293px;height:410px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/p.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/p.png')?>" alt="example-3" class="img-responsive slideanim" style="width:293px;height:410px;"></a>
	</div>
					</div>

				<div class="mygallery" id="">

						<h3 class="content-text">Photoshoot MakeUp</h3>
					<div class="text-center"> 
		<a href="<?php echo base_url('assets/images/portfolio/05.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/05.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:350px;height:350px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/06.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/06.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:350px;height:350px;"></a> 
		<a href="<?php echo base_url('assets/images/portfolio/c.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/c.png')?>" alt="example-3" class="img-responsive slideanim" style="width:350px;height:350px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/f.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/f.png')?>" alt="example-3" class="img-responsive slideanim" style="width:350px;height:350px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/e.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/e.png')?>" alt="example-3" class="img-responsive slideanim" style="width:350px;height:350px;"</a>

		<a href="<?php echo base_url('assets/images/portfolio/0.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/0.png')?>" alt="example-1" class="img-responsive slideanim" style="width:350px;height:350px;"></a> 
		
	</div>
					</div>

					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div>	
<!-- /Portfolio -->
<!-- Gallery -->
<div class="mygallery" id="gallery">
	<h3 class="text-center slideanim">My Gallery</h3>
	<div class="text-center"> 
		<a href="<?php echo base_url('assets/images/portfolio/11.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/11.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:230px;height:330px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/6.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/6.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:230px;height:330px;"></a> 
	
		<a href="<?php echo base_url('assets/images/portfolio/13.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/13.jpg')?>" alt="example-3" class="img-responsive slideanim" style="width:230px;height:330px;"></a>
		
		<a href="<?php echo base_url('assets/images/portfolio/8.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/8.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:230px;height:330px;"></a>

		<a href="<?php echo base_url('assets/images/portfolio/m.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/m.png')?>" alt="example-3" class="img-responsive slideanim" style="width:230px;height:330px;"></a>

		
		<a href="<?php echo base_url('assets/images/portfolio/02.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/02.png')?>" alt="example-3" class="img-responsive slideanim" style="width:230px;height:330px;"></a>
		<a href="<?php echo base_url('assets/images/portfolio/3.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/3.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:230px;height:330px;"></a> 

		<a href="<?php echo base_url('assets/images/portfolio/16.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/16.jpg')?>" alt="example-1" class="img-responsive slideanim" style="width:230px;height:330px;"></a> 
		
	<a href="<?php echo base_url('assets/images/portfolio/05.png')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/05.png')?>" alt="example-2" class="img-responsive slideanim" style="width:230px;height:330px;"></a> 

		
		<a href="<?php echo base_url('assets/images/portfolio/9.jpg')?>" title="My Image Gallery"><img src="<?php echo base_url('assets/images/portfolio/9.jpg')?>" alt="example-2" class="img-responsive slideanim" style="width:230px;height:330px;"></a> 
		
 
		
			
	</div>

</div>	
<!-- Gallery -->

<div class="about-me" id="workshop"> 
	<h3 class="text-center slideanim">Workshop</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="mydetails slideanim text-center">
					
					<h3>Have You Joined the Workshop?</h3>
					<p class="skill-text" style="font-size: 15px;">

					If you ever joined our workshop, please click the button below to check the detail of your workshop
				</p>

					<?php if($username== null) {?>
					<p><a href="<?php echo site_url('Login');?>"> <button class="btn btn-default btn-lg" type="submit">See my Workshop<span class="glyphicon glyphicon-menu-right"></span></button> </a></p>
					<?} else { ?>
					<p><a href="<?php echo site_url('Transaksi/transaksi_sisi_member/'.$username);?>"> <button class="btn btn-default btn-lg" type="submit">See my Workshop<span class="glyphicon glyphicon-menu-right"></span></button> </a></p>
					<?php } ?>
					
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="myskills slideanim">
					<h3 class="text-center">MakeUp Workshop</h3>
					<p class="skill-text" style="text-align:justify;">Each workshop is taught by Ratna Liu, includes a makeup lesson, Q&A session and hands-on makeup application. During this workshop you’ll learn how to create a flawless canvas, how to choose and apply color, and how to work with makeup brushes. We share the best makeup, skincare and lifestyle tips for each decade. </p>
					<div class="skill-info"> 
						<div class="table-responsive">
							
								

									<a href="<?php echo site_url('Workshop/workshop_aktif'); ?>"> <button class="btn btn-default btn-lg" type="submit">Take a Look <span class="glyphicon glyphicon-menu-right"></span>
									</button> </a>

								
								
								
						</div>	
					</div>
				</div>	
			</div>
		</div>	
	</div>	
</div>


<!-- footer -->	
<div class="contact-me" id="contact">
	<h3 class="text-center slideanim">Contact Me</h3>
	<p class="text-center slideanim"></p>
	<div class="container">
	<footer>
		<div class="row">
			<div class="col-md-6 slideanim">
				<div class="contact-details">

					<?php if($username==null){?>

					
						<div class="row">
							<div class="col-sm-12 form-group">
								<?php echo $username; ?>
								<input class="form-control" name="username" placeholder="" type="hidden" value="<?php echo $username; ?>" required>
							</div>
						</div>

						<div class="row">
						<div class="col-sm-12 form-group" >
						<textarea class="form-control"  name="isi_pesan" placeholder="input your message" rows="5"></textarea><br>
						</div>
					</div>

						<div class="row">
							<div class="col-sm-12 form-group">
								<a href= "<?php echo site_url('Login'); ?>">
								<button class="btn btn-default btn-lg" type="submit">Send <span class="glyphicon glyphicon-menu-right"></span></button></a>

								<?php } else { ?>
								<form action="<?php echo site_url('Pesan/tambah_aksi'); ?>" method="POST">

						<div class="row">
							<div class="col-sm-12 form-group">
								
								<input class="form-control" name="username" placeholder="" type="hidden" value="<?php echo $username; ?>" required>
							</div>
						</div>

						<div class="row">
						<div class="col-sm-12 form-group" >
						<textarea class="form-control"  name="isi_pesan" placeholder="input your message" rows="5"></textarea><br>
						</div>
					</div>

						<div class="row">
							<div class="col-sm-12 form-group">
								

							<a onclick="return confirm('Send this message?')">
								<button class="btn btn-default btn-lg" type="submit">Send <span class="glyphicon glyphicon-menu-right"></span></button></a>

								<?php } ?>
							</div>
						</div>
					</form>	
				</div>	
			</div>	
			<div class="col-md-6 slideanim">
				<div class="contact-info">
					<h4>Contact Info</h4>
					<div class="footer-info">
						<div>	
							<i class="glyphicon glyphicon-globe"></i>
							<p class="p1">Kuantan Raya Street</p> 
							<p class="p2">Pekanbaru, Indonesia</p>
						</div>
						<div>
							<i class="glyphicon glyphicon-phone-alt"></i>
							<p class="p1">+62 82173138090</p>
							<p class="p2">+62 82173138888</p>
							
						</div>
						<div>
							<i class="glyphicon glyphicon-envelope"></i>
							<p class="p1">rattnaliu26gmail.com</a></p> 
							<p class="p2">rattnaliu27gmail.com</a></p>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<hr>
		<div class="copyright">
			<p class="text-center">© 2016 My Profile. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
		<a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
		</footer>
	</div>
</div>
<!-- /footer -->	
	<!-- js files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<!-- js files for banner slider -->
	<script src="<?php echo base_url('assets/js/responsiveslides.min.js')?>"></script>
	  <script>
    $(window).load(function() {

     // Slideshow for banner
      $("#slider").responsiveSlides({
        maxwidth: 1920,
        speed: 1000
      });


    });
  </script>
	<!-- /js files for banner slider -->
	<!-- js files for portfolio -->
		<script src="<?php echo base_url('assets/js/classie.js')?>"></script>
		<script src="<?php echo base_url('assets/js/helper.js')?>"></script>
		<script src="<?php echo base_url('assets/js/grid3d.js')?>"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
	<!-- /js files for portfolio -->
	<!-- js files for gallery -->
<script type="text/javascript" src="<?php echo base_url('/assets/js/cobox.js')?>"></script>
	<!-- /js files for gallery -->	
	<!-- js for smooth scrolling -->
	
		<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})

</script>
	<!-- /js for smooth scrolling -->
	<!-- js for sliding -->
	
	<script>
	$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
	<!-- /js for sliding -->
	<!-- /js files -->
	
</body>
</html>	