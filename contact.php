<!DOCTYPE html>
<html>
<head>
    <?php
	include "connect.php";
	include "common_function.php";
	meta();
	css();
	?>

  </head>
  <body>

    <?php 
	navbar();
	?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg'); height: 200px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-middle mt-5">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center bg-warning">
				        			<span class="fa fa-map-marker text-danger"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Address:</span> S No. 82/1/1 to 6 Plot No 11 A Datirmala, Behind NMC Schoo, MIDC Ambad, Nashik-422010, Maharashtra, India</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center bg-warning">
				        			<span class="fa fa-phone text-danger"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Phone:</span></br> <a href="#"><span>9604367152 </span></br><span>9834472307</span></br><span>9860764415</span></a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center bg-warning">
				        			<span class="fa fa-paper-plane text-danger"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span></br> <a href="mailto:dreamsauto@gmail.com"><span>dreamsauto@gmail.com </span></br><span>dreamsauto58@yahoo.com</span></a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center bg-warning">
				        			<span class="fa fa-globe text-danger"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Contact Us</h3>
										<form method="POST" id="contactForm" action = "insert_cust_query.php" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="customer_name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group ">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="phone">Phone</label>
														<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="message">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="submit" name="submit" class="btn btn-warning">
														
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap w-100 p-5 img" style="background-image: url(images/factory.jpeg);">
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div style="width: 100%"><div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=19%C2%B057'28.8%22N%2073%C2%B044'31.5%22E+(dreams%20auto%20fibre%20glass)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe></div></div>

    <?php 
	footer(); 
		js();
	?>
    
    
  </body>
	</html>