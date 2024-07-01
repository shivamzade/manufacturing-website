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
  <?php
  $p_id = $_GET['id'];
        $result2 = mysqli_query($conn, "SELECT * FROM `product_details` WHERE `unique_product_id` = '$p_id' AND is_del='approved'");
        while ($row = $result2->fetch_object()) {
          $photo = !empty($row->photo) ? $row->photo : "default-photo.jpg";
          $product_name = $row->product_name;
          $color = $row-> color;
          $material = $row-> material;
          $size = $row -> size;
          $description = $row -> description;
          
        ?>
	<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" >
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="admin_panel/admin/product_images/<?php echo $photo;?>" />
          </a>
        </div>
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          <?php echo $product_name;?>
          </h4>
            <span class="text-success ms-2">In stock</span>
          </div>
          <p>
          <?php echo $description;?>
          </p>

          <div class="row">
            <dt class="col-3">Type</dt>
            <dd class="col-9">Regular</dd>

            <dt class="col-3">Size</dt>
            <dd class="col-9"> <?php echo $size;?></dd>

            <dt class="col-3">Color</dt>
            <dd class="col-9"><?php echo $color;?></dd>

            <dt class="col-3">Material</dt>
            <dd class="col-9"><?php echo $material;?></dd>

            <dt class="col-3">Brand</dt>
            <dd class="col-9">Dreams Auto</dd>

            
          </div>
          <?php
          }
          ?>
          <hr />
          <p class="text-center py-2"><a href="contact.php" class="btn btn-secondary mr-md-4">Get Details<span class="ion-ios-arrow-forward"></span></a></p>
        </div>
      </main>
    </div>
  </div>
</section>
<?php
footer();
js();
?>

</body>
</html>