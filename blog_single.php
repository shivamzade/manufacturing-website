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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog Details</h1>
          </div>
        </div>
      </div>
    </section>
    <?php 
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `tbl_blogs` WHERE is_del ='approved' and unique_id = '$id'; ";
                            $result = mysqli_query($conn, $sql);
                            
                            while ($r = $result->fetch_object()) {
                            $unique_id = $r -> unique_id;
                            $photo = $r -> photo;
                            $heading = $r -> heading;
                            $description = $r -> description;
                            $keyword = $r -> keyword;
                            $entry_date = $r -> entry_date;
                            
                            ?>
    <section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 ftco-animate">
        <h2 class="mb-4 text-center"><?php echo $heading; ?></h2>
        <p class="text-center">
          <img src="admin_panel/admin/blog_images/<?php echo $photo; ?>" class="img-fluid" alt="Blog Image">
        </p>
        <p class="text-justify"><?php echo nl2br(htmlspecialchars($description)); ?></p>
        <p class="text-justify"><?php echo $keyword; ?></p>
      </div>
    </div>
  </div>
</section>

            
  <?php
                            }
	footer();
	js();

	?>
  </body>
</html>