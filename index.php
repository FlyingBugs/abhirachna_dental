<?php
if(!empty($_POST['Name'])){
        $to = "archana.sbhardwaj@gmail.com";
        $subject = "Contact Us Form";
        $txt = "Name : " . $_POST['Name'];
        $txt = $txt . "\nEmail : " . $_POST['Email'];
        $txt = $txt . "\nPhone : " . $_POST['Phone'];

        if(@mail($to,$subject,$txt)){
          echo '<script type="text/javascript">alert("Thank you for showing interest. We will contact you soon.");</script>';
        } else {
          echo '<script type="text/javascript">alert("There is some error on the network. Please contact via phone.");</script>';
        }

}
?>

<!--
Author: Prashant Sharma
Author URL:
-->
<!DOCTYPE html>
<html>
<head>
<title>Abhirachna Dental</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dental Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/prashant_dep/w3.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		w3.includeHTML();
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
		<!--Code for header start-->
			<div w3-include-html="header.html"></div>
		<!--Code for header ends-->
	<div class="header-bottom">
		<div class="container">
		<!--Top bar showing the email and phone number code start-->
			<div w3-include-html="header_contact.html"></div>
		<!--Top bar showing the email and phone number code ends-->
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header" style="display: none;">

		<nav class="navbar navbar-inverse header m-b-0">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#fff;font-weight:bold;font-size:25px;">Abhirachna Dental</a>
    </div>
    <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul> -->
  </div>
</nav>

	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>

							<li><a href="contact.html">Contact Us</a></li>
						  </ul>
						   <form class="navbar-form navbar-left" role="search" style="display:none;">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Type your text here...">
							</div>
							<button type="submit" class="btn btn-default searc" aria-label="Left Align">
								<span> </span>
							</button>
						  </form>
						</div><!-- /.navbar-collapse -->
					</nav>
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });

				    });
				  </script>
			<!--//End-slider-script -->
			<div id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
				<ul class="rslides callbacks callbacks1" id="slider3">
					<li id="callbacks1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
						<div class="banner-info">
							<h1>Welcome to Abhirachna Dental Implant And Cosmetic Clinic. :)</h1>
							<p>The dental professionals at this clinic are pleased to welcome you to our state of art dental facility equipped with modern technology including digital x-rays, intra oral camera and audio visual dental information system. All dental professionals are MDS specialists and we take pride in our quality of work. Above all we enjoy beautiful smiles of our patients!!</p>
							<!-- <a href="single.html" class="hvr-shutter-out-horizontal">Read More</a> -->
						</div>
					</li>
					<li id="callbacks1_s1" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
						<div class="banner-info">
							<h1>We love your smiles ;)</h1>
							<p>We work with our patients so they can achieve and maintain a beautiful smile and healthier gums and teeth. We take the time with our patients to explain their treatment options and inform them of additional preventive care.</p>
							<!-- <a href="single.html" class="hvr-shutter-out-horizontal">Read More</a> -->
						</div>
					</li>
					<li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
						<div class="banner-info">
							<h1>Best dental care center :D</h1>
							<p>In a short period, Abhirachna Dental has established itself as one of best dental care center  in Delhi and NCR with a dedicated team of well qualified and experienced doctor with the latest technology and in house Digital OPG .We follow the best sterilization and infection control measures. The clinic is conveniently located in ground floor, South Extension Part 1, South Delhi .</p>
							<!-- <a href="single.html" class="hvr-shutter-out-horizontal">Read More</a> -->
						</div>
					</li>
				</ul><ul class="callbacks_tabs callbacks1_tabs"><li class="callbacks1_s1"><a href="#" class="callbacks1_s1">1</a></li><li class="callbacks1_s2 callbacks_here"><a href="#" class="callbacks1_s2">2</a></li><li class="callbacks1_s3"><a href="#" class="callbacks1_s3">3</a></li></ul>
			</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left" style="">

					<div class="banner-bottom-grid-left-grid">
						<a href="images/1.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/2.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/3.jpeg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/3.jpeg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/4.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/5.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/6.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/7.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid">
						<a href="images/8.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<div class="banner-bottom-grid-right">
					<div class="banner-bottom-grid-right-grid" style="color:#fff;">
						<h3>Contact Us</h3>

					<div class="">
						<p class="m-b-0"><strong>Email</strong></p>
						<a href="mailto:archana.sbhardwaj@gmail.com" style="color:#fff;">archana.sbhardwaj@gmail.com</a>
					</div>

					<div class="">
						<p class="m-b-0"><strong>Phone</strong></p>
						<p class="m-b-0">+91 7488156670,+91 9308056390</p>
					</div>
					<div class="">
						<form method="post">
							<input type="text" name="Name" placeholder="Name" onfocus="this.value = '';"
								required="">

							<input type="email" name="Email" placeholder="Email" onfocus="this.value = '';"
								required="">

							<input type="text" name="Phone" placeholder="Phone" onfocus="this.value = '';"
								required="">

							<input type="submit" value="Submit">

						</form>
					</div>
					</div>
				</div>
				<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script>
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-video -->
	<div class="banner-bottom-video" >
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  Smile Designing
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							Smile Designing at our centre by our expert dental cosmetologist Dr Archana Bhardwaj. She brings vast experience on board having treated a vast magnitude of international patients and celebrities
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							  Root Canal Treatment
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						   <div class="panel-body">
							<strong>Dr Archana Bhardwaj </strong>our Conservative dentist and Endodontist, is a very experienced endodontist with numerous publications in national and international journals. Dr Archana is a connoisseur of single sitting and multiple sittings root canal treatment .
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Zirconia Crown and Bridges
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						   <div class="panel-body">


Zirconia Crowns of all types are being done at Abhirachna Dental by its expert team of qualified doctors ,right from simple PFM caps to ,Noble Procera crowns ,Lava Premium ,Cad cam Crowns

						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  Dental Implants
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						   <div class="panel-body">


US FDA approved world class dental implants available at Abhirachna Dental by our experinced maxillofacial surgeon and implantologist Dr Abhishek Bhardwaj,he is a expert in All on four and All on Six ,immediate implants.

						  </div>
						</div>
					  </div>
					   <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							  Teeth Braces
							</a>
						  </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						   <div class="panel-body">


Fixed orthodontic treatment at our center with the option of ceramic,metal braces and invisible braces and invisalign.

						  </div>
						</div>
					  </div>



					</div>
				</div>
				<div class="banner-bottom-video-grid-right">
					<h4>Offering a wide range of services</h4>
					<div class="banner-bottom-video-grid-rgt">
						<img src="images/7.jpg" alt=" " class="img-responsive" style="margin-top: -35px;">
						<div class="caption" style="display:none;">
							<h3>We do our best</h3>
							<p>We want you to feel confident that when you choose our clinic, you're working with dentists and other professionals who are qualified, experienced and caring.</p>
							<p><a href="#" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Read More</a></p>
						</div>
					</div>
					<div class="banner-bottom-video-grid-rgt">
						<ul>
							<li><a href="#">Smile Designing</a></li>
							<li><a href="#">Root Canal Treatment</a></li>
							<li><a href="#">Zirconia Crown and Bridges</a></li>
							<li><a href="#">Dental Implants</a></li>
							<li><a href="#">Teeth Braces</a></li>

						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom-video -->
<!-- featured-services -->
	<div class="featured-services" style="display:none;">
		<div class="container">
			<div class="featured-services-left">
				<h3>Walk through our work</h3>
				<div class="featured-services-video">
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://player.vimeo.com/video/7361599" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
					quae ab illo inventore veritatis et quasi architecto beatae vitae
					dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
					aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
					eos qui ratione.</p>
			</div>
			<div class="featured-services-right">
				<h3>Latest news</h3>
				<img src="images/3.jpg" alt=" " class="img-responsive" />
				<h4>consequatur aut perferendis doloribus asperiores repellat</h4>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum
					necessitatibus saepe eveniet ut et voluptates repudiandae sint
					et molestiae non recusandae. Itaque earum rerum hic tenetur a
					sapiente delectus, ut aut reiciendis voluptatibus maiores alias
					consequatur aut perferendis doloribus asperiores repellat.</p>
				<div class="text-date">
					<p>doloribus <span>asperiores</span></p>
					<h5>24th<span>June</span></h5>
				</div>
				<div class="load">
					<a href="#" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Read More</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //featured-services -->
<!-- view -->
	<div class="view">
		<div class="container">
			<div class="view-left">
				<p><span>Dedicated to Dental Excellence</span>



<p>We work with our patients so they can achieve and maintain a beautiful smile and healthier gums and teeth. We take the time with our patients to explain their treatment options and inform them of additional preventive care. Our web site also provides you with background about our <strong>dentist</strong>, staff, office hours, , maps, directions to our office in <strong>South Extension, New Delhi</strong> and other useful information. We know how hectic life can be and are committed to making our clinic convenient and accessible. And we want you to feel confident that when you choose our clinic, you're working with dentists and other professionals who are qualified, experienced and caring. &nbsp;<strong>Be sure to visit our service&nbsp;page to see all of our services including scaling, root canal treatment, smile designing, dental implant, tooth braces, and Zirconia brown and bridges etc.&nbsp;</strong></p>
<p>In a short period, Abhirachna Dental has established itself as one of best dental care center &nbsp;in Delhi and NCR with a dedicated team of well qualified and experienced doctor with the latest technology and in house Digital OPG .We follow the best sterilization and infection control measures. <strong>The clinic is conveniently located in ground floor, South Extension Part 1, South Delhi</strong> .</p>
</div>
<div class="view-right">
				<div><img src="images/center.jpg" class="img-circle"  width="300" height="300"></div>

			</div>
				<div class="view-right text-right">

				<a href="#" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Read More</a>
			</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

<!-- //view -->
<!-- map -->
<div w3-include-html="map.html"></div>
<!-- //map -->
<!-- footer
	<div class="footer">
		<div class="container">
			<div class="">
				<ul>
					<li><a href="#">Privacy Policy |</a></li>
					<li><a href="contact.html">Sitemap |</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
				<p>Copyright © 2015 Dental Clinic. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
