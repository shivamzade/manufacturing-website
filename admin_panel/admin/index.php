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
        
        <!--Start Dashboard Content-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            
              <div class="card-header text-uppercase text-center">Dashboard </div>
              <br>
              <div class="card bg-transparent shadow-none mt-3 ">
                <div class="card-content">
                  <div class="row text-center">
                    <!-- Total Categories Card -->
                    <div class="col-12 col-lg-6 col-xl-3 border-secondary-light">
                      <div class="card-body p-2">
                        <div class="media">
                          <div class="media-body text-center">
                            <?php
                            $sql = "SELECT COUNT(*) as total FROM product_category where `is_del` = 'approved'";
                            $result = mysqli_query($conn, $sql);
                            while ($r = $result->fetch_object()) {
                            ?>
                            <h4 class="text-info"><?php echo $r->total; ?></h4>
                            <span class="text-dark">Total Categories</span>
                            <?php
                            }
                            ?>
                          </div>
                          <div class="align-self-center w-circle-icon rounded bg-info shadow-info">
                            <i class="icon-basket-loaded text-white"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Total Data Card -->
                    <div class="col-12 col-lg-6 col-xl-3 border-secondary-light">
                      <div class="card-body p-2">
                        <div class="media">
                          <div class="media-body text-center">
                            <?php
                            $sql = "SELECT COUNT(*) as total FROM product_details where `is_del` = 'approved'";
                            $result = mysqli_query($conn, $sql);
                            while ($r = $result->fetch_object()) {
                            ?>
                            <h4 class="text-danger"><?php echo $r->total; ?></h4>
                            <span class="text-dark">Total Products</span>
                            <?php
                            }
                            ?>
                          </div>
                          <div class="align-self-center w-circle-icon rounded bg-danger shadow-danger">
                            <i class="icon-wallet text-white"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div><!--End Row-->
                </div>
              </div><!--End Card-->
              
            </div>
          </div>
        </div>
        
      </div>
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <?php
    footer();
    ?>
    <?php
    js();
    ?>
  </div>
</body>
