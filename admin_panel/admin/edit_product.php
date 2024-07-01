<head>
  <?php
  include "common_function.php";
  include "../../connect.php";
  meta();
  css();
  ?>
</head>
<body>
  <div id="wrapper">
    <?php
    sidebar();
    navbar();
    ?>
    <div class="clearfix"></div>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header text-uppercase">
                Edit Product
              </div>
              <div class="card-body">
              <?php 
               $u_id = $_GET['id'];
               $res = mysqli_query($conn,"select * from `product_details` where `unique_product_id`='$u_id' AND `is_del`='approved'");
                        while($r=$res->fetch_object())
                        {
                     $unique_product_id=$r->unique_product_id;
                 ?>
                <form action="update_product.php" method="post" id="registration_form" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="product_name">Product Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                            <input type="hidden" name="unique_product_id" value="<?php echo $unique_product_id; ?>">
                          <input type="text" id="product_name"  value="<?php echo $r -> product_name; ?>" name="product_name" class="form-control" placeholder="Name of the product">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="category_id">Category</label>
                      </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                              <div class="form-group">
                                <div class="form-line">
                                  <select name="category_id" id="category_id" class="form-control">
                                  <option value="">---Select Category---</option>
                                  <?php
                                  $sql = "SELECT * FROM product_category where `is_del` = 'approved'";
                                  $result1 = mysqli_query($conn, $sql);
                                  while ($r1 = $result1->fetch_object()) {
                                  ?>
                                    
                                    <option value="<?php echo $r1->category_id; ?>"><?php echo $r1-> category_name; ?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                    <!--input type="text" name="customer_location" id="customer_location" class="form-control" placeholder="Enter Customer Location"--->
                                    </div>
                                  </div>
                          </div>
                    </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="shape">Shape</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="shape" value="<?php echo $r -> shape; ?>" name="shape" class="form-control" placeholder="shape">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="size">Size</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="size" value="<?php echo $r -> size; ?>" name="size" class="form-control" placeholder="size">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="color">Color</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="color" value="<?php echo $r -> color; ?>" name="color" class="form-control" placeholder="color">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="type">Product Type</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="type"  value="<?php echo $r -> type; ?>" name="type" class="form-control" placeholder="type ">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="material">material</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="material" value="<?php echo $r -> material; ?>" name="material" class="form-control" placeholder="material">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="usage">Usage of Product</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="usage" value="<?php echo $r -> usage_of_product; ?>" name="usage" class="form-control" placeholder="usage">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="capacity">capacity</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="capacity" value="<?php echo $r -> capacity; ?>" name="capacity" class="form-control" placeholder="capacity">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="mounted">mounted</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="mounted" value="<?php echo $r -> mounted; ?>" name="mounted" class="form-control" placeholder="mounted">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="description">Product Description</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                        <textarea class="form-control" name="description" id="description"><?php echo htmlspecialchars($r->description); ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="photo">Product Image</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="photo" id="photo" placeholder="Insert Image of the Product.">
                            <input type="hidden" name="prev_photo" value="<?php echo $r -> photo; ?>" ">
                            <img src="product_images/<?php echo $r -> photo; ?>" height="100px" width="150px">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">  
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <button type="submit" name="save" class="btn btn-primary m-t-15 waves-effect">Update</button>
                      <button type="reset" class="btn btn-primary m-t-15 waves-effect">Reset</button>
                    </div>
                  </div>
                </form>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    footer();
    ?>
  </div>
  <?php
  js();
  ?>
</body>

