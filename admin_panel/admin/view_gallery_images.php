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
            <div class="card-header text-uppercase text-center">All Categories</div>
            <div class="card-header"><i class="fa fa-table"></i>
                                   <span>View Categories </span>
                                <a class="btn btn-primary" href="add_gallery_images.php" role="button">Add New Image</a>
                            </div>
            <br>

            <div class="table center">
              
                    <table class="table-responsive">
                      <tr>
                        <td>Image</td>
                        <td>Action</td>
                      </tr>
                      <?php
              $result = mysqli_query($conn, "SELECT * FROM `tbl_gallery_images` WHERE is_del='approved'");
              while ($r = $result->fetch_object()) {
                $photo = $r-> gallery_image;
                $id = $r -> id;
                $unique_id = $r -> unique_id;
                
              ?>
                      <tr>
                        <td><img src="gallery_images/<?php echo $photo ?>" alt="" height="150px" width="200px"></td>
                        <td class=""><a href="delete_gallery_image.php?uid=<?php echo $unique_id; ?>" class="btn btn-danger center"> delete</a></td>
                      </tr>
                      <?php
              }
              ?>
                    </table>
                   
                  
                
              
              
            </div>
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
