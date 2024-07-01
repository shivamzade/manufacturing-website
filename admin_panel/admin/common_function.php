<?php

include "../../connect.php";
function meta(){?>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Panel</title>
<?php
}
?>

<?php
function css(){?>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
<?php
}
?>

<?php
function sidebar(){?>
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-secondary-light shadow-none">
     <div class="brand-logo">
      <a href="#">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin Panel</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="add_category.php" class="waves-effect">
          <i class="icon-plus"></i> <span>Add Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="add_product.php" class="waves-effect">
          <i class="icon-plus"></i> <span>Add Products</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      
      
      <li>
        <a href="add_gallery_images.php" class="waves-effect">
          <i class="icon-layers"></i> <span>Add Gallery Images</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="view_all_categories.php" class="waves-effect">
          <i class="icon-layers"></i> <span>View All Categories</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="view_all_products.php" class="waves-effect">
          <i class="icon-layers"></i> <span>View All Products</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="view_gallery_images.php" class="waves-effect">
          <i class="icon-layers"></i> <span>View Gallery Images</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="logout.php" class="waves-effect">
          <i class="icon-logout"></i> <span>LogOut</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
   </div>
   <!--End sidebar-wrapper-->

<?php
}
?>

<?php
function navbar(){?>
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-dark border-bottom border-secondary-light shadow-none">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    
   
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><div class="icon-user"></div></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php">Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<?php
}
?>

<?php
function footer(){?>
<!--Start footer-->
<footer class="footer bg-transparent border-secondary-light">
      <div class="container">
        <div class="text-center text-dark">
        Dreams Auto Fibre Glass 
        </div>
      </div>
    </footer>
	<!--End footer-->

<?php
}
?>
<?php
function js(){?>
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Index js -->
  <script src="assets/js/index2.js"></script>
</body>
</html>
<?php
}
?>