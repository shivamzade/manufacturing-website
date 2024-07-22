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
            <h1 class="mb-0 bread">Our Blogs</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
        
      <div class="container">
          
        <div class="row d-flex">
            <?php
        
        $sql = "SELECT * FROM `tbl_blogs` WHERE `is_del` ='approved' ";
        $result = mysqli_query($conn, $sql);
        
       while ($r = $result->fetch_object()) {
        $unique_id = $r -> unique_id;
        $photo = $r -> photo;
        $heading = $r -> heading;
        $entry_date = $r -> entry_date;
        
        ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog_single.php?id=<?php echo $unique_id; ?>" class="block-20 rounded" style="background-image: url('admin_panel/admin/blog_images/<?php echo $photo; ?>');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><?php echo $entry_date; ?></div>
                  <div>Admin</div>
                  
                </div>
                <h3 class="heading"><?php echo $heading; ?></h3>
              </div>
            </div>
          </div>
          <?php }
            ?>
      </div>
      
            </div>
            
    </section>

  <?php
	footer();
	js();

	?>
  </body>
</html>