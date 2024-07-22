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
    <!-- END nav -->
	
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg'); height:200px" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-middle mt-5">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
	<div class="container">
        <div class="row justify-content-center pt-5">
          <div class="col-md-8 heading-section text-center ftco-animate">
            <h2>Company Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 content">
            <p class="text-justify m-5">
              Established in the year 2009 at Nashik, Maharashtra, India, Dreams Auto Fiberglass has become a leading Manufacturer and Supplier of high-end FRP Pedal Dustbin, FRP Boats, Fiberglass Cable Tray, Air Ventilation System, Industrial FRP Gratings, FRP Motor Guard, FRP Instrument Canopy, etc. We are a sole proprietary organization offering creative, durable, and trusted products under the brand name of Dreams Auto. Our company has an advanced production base managed by experienced engineers to design valuable products for serving different needs with perfection.
            </p>
            
            <h3 class="m-5">Key Facts of Dreams Auto Fiberglass:</h3>
            <ul class="ml-5 mb-5">
              <li><strong>Nature of Business:</strong> Manufacturer and Supplier</li>
              <li><strong>Location:</strong> Nashik, Maharashtra, India</li>
              <li><strong>Year of Establishment:</strong> 2009</li>
              <li><strong>No. of Employees:</strong> 15</li>
              <li><strong>GST No.:</strong> 27BSBPS3994K1Z0</li>
              <li><strong>Manufacturing Brand:</strong> Dreams Auto</li>
              <li><strong>Bank:</strong> IDBI</li>
              <li><strong>No. of Production Units:</strong> 01</li>
              <li><strong>No. of Engineers and Designers:</strong> 20</li>
            </ul>
          </div>
        </div>
      </div>

    <?php
	section2();
	section1();
	?>
	    <div class="container">
    <div class="row justify-content-center pt-5">
    	<iframe src="images/clients.pdf" width="80%"  height="600px">
        This browser does not support PDFs. Please download the PDF to view it: 
        <a href="images/clients.pdf">Download PDF</a>
        </iframe>
        </div>
        </div>
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






    <?php
	footer();
	js();

	?>
    
  </body>
</html>