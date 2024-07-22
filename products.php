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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg'); height: 200px" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-middle mt-5">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Our gallery</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container-fluid px-md-4">
				<div class="row">
				<?php
              $result = mysqli_query($conn, "SELECT * FROM `tbl_gallery_images` WHERE is_del='approved'");
              while ($r = $result->fetch_object()) {
                $photo = $r-> gallery_image;
              ?>
          <div class="col-md-3 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(admin_panel/admin/gallery_images/<?php echo $photo;?>);">
            	<a href="admin_panel/admin/gallery_images/<?php echo $photo;?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	
            </div>
          </div>
		  <?php
			  } 
		 ?>



		  
			</div>
		</section>

    <?php
	footer();
	js();

	?>
  </body>
</html>