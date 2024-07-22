<!DOCTYPE html>
<html>
  <head>
    <?php
	include "connect.php";
	include "common_function.php";
	meta();
	css();
	?>
    <style>
    .carousel-item {
      height: 100vh;
      background-size: cover;
      background-position: center;
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-wrap {
      position: relative;
      z-index: 1;
    }
  </style>
    
  </head>
  <body>

    <?php navbar();?>
	<div class="hero-wrap" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
		<div class="col-md-6 ftco-animate">
			<h1 class="mb-4">Manufacturer of <span>FRP</span> <span>Fibre glass</span> Products</h1>
		  <p><a href="#" class="btn btn-secondary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
		</div>
	  </div>
	</div>
  </div>
  <!-- <div id="heroCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('images/bg1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Manufacturer of <span>FRP</span> <span>Fibre glass</span> Products</h1>
            <p><a href="#" class="btn btn-secondary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('images/bg2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">High Quality <span>FRP</span> Products</h1>
            <p><a href="#" class="btn btn-secondary mr-md-4 py-3 px-4">Discover more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('images/bg3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Durable and Reliable <span>FRP</span> Solutions</h1>
            <p><a href="#" class="btn btn-secondary mr-md-4 py-3 px-4">Explore now <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<?php
  	section2();
	section1();
	
	?>
    <section id = "sec4" class="ftco-section ftco-intro" style="background-image: url(images/bg2.jpg);">
      <div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Our Specialities</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
              </div>
              <div class="media-body">
                <h3 class="heading">High-Quality FRP Products</h3>
                <p>We manufacture top-notch Fiber Reinforced Plastic (FRP) products that meet industry standards, ensuring durability and reliability in every piece.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
            		
              </div>
              <div class="media-body">
                <h3 class="heading">Customization and Innovation</h3>
                <p>Our team excels in creating customized solutions tailored to your specific needs, continually innovating to stay ahead in the market.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
              </div>
              <div class="media-body">
                <h3 class="heading">Expert Craftsmanship</h3>
                <p>With years of experience and a skilled workforce, we guarantee superior craftsmanship in all our fiberglass products.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
              </div>
              <div class="media-body">
                <h3 class="heading">Advanced Manufacturing Techniques</h3>
                <p>Utilizing state-of-the-art technology and advanced manufacturing processes, we deliver products that are both efficient and cost-effective.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
              </div>
              <div class="media-body">
                <h3 class="heading">Environmentally Friendly</h3>
                <p>Our commitment to sustainability is reflected in our environmentally friendly production methods and use of recyclable materials.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="d-block services">
              <div class="icon d-flex align-items-center justify-content-center">
              </div>
              <div class="media-body">
                <h3 class="heading">Excellent Customer Service</h3>
                <p>We prioritize customer satisfaction with dedicated support, timely delivery, and responsive service to ensure a seamless experience.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>

          
        </div>
    	</div>
    </section>
<!-- 

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Product Categories</h2>
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4 order-md-last">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-row">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Turbine Roof Ventilation Systems</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Industrial Gratings</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">FRP Motor Cover</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">FRP Canopy</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5">FRP Dustbin</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">FRP Boats</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Cable Tray</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">FRP Sheets</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Junction Box</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">FRP Tanks</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Daylight System</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Meter Guard</a>
						  </li>
              <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Life Jacket Box</a>
						  </li>
						</ul>
					</div>

					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/services-1.jpg);"></div>
					  		<h3><a href="#">House Washing</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/services-2.jpg);"></div>
						  	<h3><a href="#">Roof Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/services-3.jpg);"></div>
						  	<h3><a href="#">Driveway Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/services-4.jpg);"></div>
						  	<h3><a href="#">Gutter Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/services-5.jpg);"></div>
						  	<h3><a href="#">Patio Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
              <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/services-6.jpg);"></div>
						  	<h3><a href="#">Building Cleaning</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		 -->
		<section class="ftco-section">
			<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Product Categories</h2>
          </div>
        </div>
				<div class="row">
				<?php
$result = mysqli_query($conn, "SELECT * FROM `product_category` WHERE is_del='approved'");
while ($r = $result->fetch_object()) {
  $category_id = $r->category_id;

  // Fetch photo from product_details table based on category_id
  $result2 = mysqli_query($conn, "SELECT photo FROM `product_details` WHERE category_id='$category_id' AND is_del='approved' LIMIT 1");
  $photo = "default-photo.jpg"; // Default photo in case no photo is found
  if ($result2) {
    $row = $result2->fetch_object();
    if ($row) {
      $photo = $row->photo;
    }
  }
?>	
  <div class="col-md-3 ftco-animate">
    <div class="work mb-4 img d-flex align-items-end " style="background-image: url(admin_panel/admin/product_images/<?php echo $photo; ?>);">
      <a href="admin_panel/admin/product_images/<?php echo $photo; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
        <span class="fa fa-eye"></span>
      </a>
      <div class="desc w-100 px-4">
        <div class="text w-100 mb-3">
          <h2><a href="products.php"><?php echo $r->category_name; ?></a></h2>
          <span>show more</span>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

          
          
        </div>
		
			</div>
			<div class="row justify-content-center pb-4	mt-5">
			<p><a href="products.php" class="btn btn-secondary mr-md-2 py-4 px-4">Get More Details <span class="ion-ios-arrow-forward"></span></a></p>
			</div>
		</section>
    <hr>
		 
		 
		 
	
<section class="ftco-section testimony-section bg-white">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Our Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <marquee behavior="scroll" direction="left" scrollamount="10">
                    <div class="d-flex justify-content-around">
                        <?php
                        $sql = "SELECT * FROM `tbl_clients` WHERE is_del ='approved'";
                        $result = mysqli_query($conn, $sql);
                        
                        while ($r = $result->fetch_object()) {
                            $photo = $r->logo;
                        ?>
                            <div class="testimony-wrap d-flex justify-content-center align-items-center">
                                <div class="client-logo">
                                    <img src="admin_panel/admin/client_logos/<?php echo $photo; ?>" alt="Client Logo" height="150px" width="200px">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </marquee>
            </div>
        </div>
    </div>
</section>



    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">June 14, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">June 14, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">June 14, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg2.jpg);">
			<div class="overlay"></div>
      <div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-12 col-lg-8 half p-3 py-5 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="insert_cust_query.php" method = "post" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span></span></div>
	                      <input type="text" class="form-control" name = "product_name" placeholder="Product Name (For Inquiry)">
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-wrap">
											<div class="icon"><span ></span></div>
				              <input type="text" class="form-control" name= "customer_name" placeholder="Your Name">
				            </div>
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-wrap">
											<div class="icon"><span></span></div>
				              <input type="text" class="form-control" name= "email" placeholder="Email Address">
				            </div>
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span ></span></div>
			            		<input type="text" class="form-control" name= "phone" placeholder="Mobile No.">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span></span></div>
			            		<input type="text" class="form-control" name= "location" placeholder="Your Location">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea cols="30" rows="7" name= "message" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									    <input type ="submit" value"submit" class="btn btn-secondary mr-md-2 py-4 px-4" ><span class="ion-ios-arrow-forward"></span>
			                    </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
<?php
footer();
js();
?>
  </body>
</html>