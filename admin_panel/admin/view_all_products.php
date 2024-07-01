<?php include "common_function.php";
include "../../connect.php"; ?>
<head>
meta();?>
	<?php css(); ?>
</head>
<body>
<div id="wrapper">
	 <?php sidebar(); ?>

	<?php navbar();?>
    <div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <div class="card-header"><i class="fa fa-table"></i>
                                   <span>View Items </span>
                                <a class="btn btn-primary" href="add_product.php" role="button">Add Products</a>
                            </div>
                         <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                                <thead>
                                    <tr>
                                            <th>Action</th>
                                            <th>Sr. No.</th>
                                            <th>Product Name</th>
                                            <th>Shape</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Type</th>
                                            <th>Material</th>
                                            <th>Usage</th>  
                                            <th>Capacity</th>
                                            <th>Mounted</th>
                                            <th>Description</th>
                                            <th>Images</th>


                                        </tr>
                                </thead>
                                <tbody>
                                   <?php 
               $count=1;
               $res = mysqli_query($conn,"select * from `product_details` where is_del='approved'");
                        while($r=$res->fetch_object())
                        {
                     $unique_id=$r-> unique_product_id;
                 ?>
                                        <tr>
                                            
                                            <td>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu">
                <li>  <a class="dropdown-item" href="edit_product.php?id=<?php echo $unique_id; ?>">Edit</a></li>
                <li>  <a class="dropdown-item" href="delete_product.php?id=<?php echo $unique_id; ?>">Delete</a></li>
   
            </ul>
        </div>
                        </td>
                                
                            <td class="center">
                                <?php echo $count; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->product_name; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->shape; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->size; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->color; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->type; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->material;?>
                            </td>
                            <td class="center">
                                <?php echo $r->usage_of_product; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->capacity; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->mounted; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->description; ?>
                            </td>

                            <td class="center">
                            <img src="product_images/<?php echo $r -> photo; ?>" height="50px" width="80px">
                            </td>

                                        </tr>
                                        <?php
													$count++;
												}
												?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <span class="clear"></span>
    </div>
</div>
 



</div>

 <?php 
 footer();
 js();
 ?>
    <!-- Jquery Core Js -->
</body>
</html>