<?php
session_start();
include "../../connect.php";
include "common_function.php";

$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$color = $_POST['color'];
$shape = $_POST['shape'];
$size = $_POST['size'];
$type = $_POST['type'];
$material = $_POST['material'];
$capacity = $_POST['capacity'];
$usage = $_POST['usage'];
$mounted = $_POST['mounted'];
$description = $_POST['description'];

$unique_product_id = rand().date("Ymdhis");
$entry_date = date("Y-m-d");

if($_FILES["photo"]["tmp_name"])
		{
			$tt1= $_FILES["photo"]["name"];
			$image1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
			move_uploaded_file($_FILES["photo"]["tmp_name"],"product_images/".$image1);			
		}

$insert = "INSERT INTO `product_details`(`unique_product_id`, `product_name`,`category_id`, `color`, `shape`, `size`, `type`, `material`, `usage_of_product`, `capacity`, `mounted`,`description`, `photo`, `entry_date`, `is_del`) 
VALUES ('$unique_product_id','$product_name', '$category_id', '$color','$shape','$size','$type','$material','$usage','$capacity','$mounted', '$description', '$image1','$entry_date','approved')";

if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Added Successfully...!");';
    echo'window.location="view_all_products.php";';
    echo'</script>';
}
?>