<?php
include "connect.php";

function meta(){
    ?>
<title>Dreams Auto Fibre Glass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php    
}
?>

	<?php
function css(){
    ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/animate.css">
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">


<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<?php    
}
?>

<?php
function navbar(){
    ?>
<div class="wrap bg-warning">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
	    <div class="container">
	    	<img src="images/logo.png" width="100px" alt="logo">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
	          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
	          
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
<?php    
}
?>


<?php
function section1(){
    ?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about_1.jpg);">
    				</div>
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">Why Choose Us?</h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center bg-danger"><span class="flaticon-confetti text-light"></span></div>
	    					<div class="text pl-3">
	    						<h4 class="text-warning">Expertise and Experience</h4>
	    						<p>With over five years of experience in the industry, our owner, Mr. Dhiraj Singh, brings extensive knowledge and expertise to the company</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center bg-danger"><span class="flaticon-consult text-light"></span></div>
	    					<div class="text pl-3">
	    						<h4 class="text-warning">Advanced Manufacturing Facilities</h4>
	    						<p>Our state-of-the-art manufacturing unit is equipped with the latest and most advanced machinery and technology</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center bg-danger"><span class="flaticon-winner text-light"></span></div>
	    					<div class="text pl-3">
	    						<h4 class="text-warning">High-Quality  &amp; Reliable Products</h4>
	    						<p>At Dreams Auto Fiberglass, we prioritize the use of high-grade raw materials in all our products</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex"> 
	    					<div class="icon d-flex align-items-center justify-content-center bg-danger"><span class="flaticon-technical text-light"></span></div>
	    					<div class="text pl-3">
	    						<h4 class="text-warning">Customer-Centric Approach</h4>
	    						<p>We are dedicated to providing exceptional customer service and ensuring complete satisfaction. </p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>

<?php    
}
?>

<?php
function section2(){
    ?>
<section class="ftco-counter bg-warning " id="section-counter">
    	<div class="container ">
    		<div class="row">
    			<div class="col-md-4 mb-5 mb-md-0 text-center text-md-left ">
    				<h2 class="font-weight-bold" style="color: #fff; font-size: 20px;">We Provide Free Quotation</h2>
    				<a href="#" class="btn btn-white btn-outline-white">Free Consultation</a>
    			</div>
    			<div class="col-md-8">
						<div class="row">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate ">
		            <div class="block-16 text-center">
		              <div class="text ">
		                <strong class="number text-dark" data-number="50">0</strong>
		              </div>
		              <div class="text-grey">
		              	<span>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number text-dark" data-number="20 ">0</strong>
		              </div>
		              <div class="text-grey">
		              	<span>Expert Workers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number text-dark" data-number="40">0</strong>
		              </div>
		              <div class="text-grey">
		              	<span>Products</span>
		              </div>
		            </div>
		          </div>
		          <!-- <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number text-dark" data-number="50">0</strong>
		              </div>
		              <div class="text-grey">
		              	<span>Pets Hosted</span>
		              </div>
		            </div>
		          </div> -->
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
<?php    
}
?>
<?php 
function categories(){ ?>


<?php
} 
 ?>
<?php 
function categorie1(){ ?>


<?php
} 
 ?>



<?php
function footer(){
    ?>
<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-5    mb-4 mb-md-0">
						<h2 class="footer-heading">Dreams Auto Fibreglass</h2>
						<p>"Quality and Innovation in Every Fiber." - Dreams Auto Fiberglass</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					
					<div class="col-md-6 col-lg-4 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="index.php" class="py-2 d-block">Home</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
              <li><a href="products.php" class="py-2 d-block">Products</a></li>
              <li><a href="gallery.php" class="py-2 d-block">Works</a></li>
              <li><a href="blog.php" class="py-2 d-block">Blog</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Have a Questions?</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map"></span><span class="text"> S No. 82/1/1 to 6 Plot No 11 A Datirmala, Behind NMC Schoo, MIDC Ambad, Nashik-422010, Maharashtra, India</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91-9604367152</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Developed  by <a href="https://highclonoidsoftec.com" target="_blank">HighClonoid Softec Pvt Ltd</a>
                </p>
          </div>
        </div>
			</div>
		</footer>   
<?php    
}
?>

<?php
function js(){
    ?>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<?php    
}
?>