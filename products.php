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

  <?php navbar();?>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg'); height: 200px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-middle mt-5">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Our Products</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-intro bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Top Categories</h2>
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
        <div class="col-md-3 ftco-animate" style="width: 18rem;">
            <a href="specific_category.php?c_id=<?php echo $category_id;?>"><img src="admin_panel/admin/product_images/<?php echo $photo; ?> " height="200px"  class="card-img-top" alt="Picture"></a>
            <div class="desc w-100 px-1">
        <div class="text w-100 mb-3">
          <h6><?php echo $r->category_name; ?></h6>
          <a href="specific_category.php?c_id=<?php echo $category_id;?>" class="text-warning"><span>show more</span></a>
        </div>
      </div>
          </div>
          <?php } ?>
        </div>

		<p class="text-center py-5"><a href="all_categories.php" class="btn btn-secondary mr-md-4 py-3 px-4">Show All Categories <span class="ion-ios-arrow-forward"></span></a></p>
    	</div>

    </section>

    

    <?php
	footer();
	js();

	?>
  </body>
</html>