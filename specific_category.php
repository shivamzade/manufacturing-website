<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include "connect.php";
  include "common_function.php";
  meta();
  css();
  ?>
  <style>
    .product-card {
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      margin-bottom: 20px;
    }
    .product-img {
  width: 100%; /* Adjust as needed */
  height: 300px; /* Adjust as needed */
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
}
    .product-info {
      padding: 20px;
    }
    .product-name {
      font-size: 1.25rem;
      font-weight: bold;
      margin: 10px 0;
    }
    .product-price {
      color: #28a745;
      font-size: 1.1rem;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  navbar();
  ?>
  <section class="ftco-section testimony-section bg-light">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM `product_category` WHERE category_id = '".$_GET['c_id']."' AND is_del='approved'");
          if ($r = $result->fetch_object()) {
            $category_name = $r->category_name;
            echo "<h2>$category_name</h2>";
          }
          ?>
        </div>
      </div>
      <div class="row ftco-animate">
        <?php
        $result2 = mysqli_query($conn, "SELECT * FROM `product_details` WHERE category_id = '".$_GET['c_id']."' AND is_del='approved'");
        while ($row = $result2->fetch_object()) {
          $photo = !empty($row->photo) ? $row->photo : "default-photo.jpg";
          $product_name = $row->product_name;
          $product_id = $row -> unique_product_id
          
        ?>
        <div class="col-md-4">
          <div class="product-card">
            <a href="product_details.php?id=<?php echo $product_id;?>">
            <div class="product-img" style="background-image: url('admin_panel/admin/product_images/<?php echo $photo; ?>'); ">
            </div>
            <div class="product-info">
              <h3 class="product-name"><?php echo $product_name;?></h3>
            </div>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  

  <?php
  footer();
  js();
  ?>
</body>
</html>
