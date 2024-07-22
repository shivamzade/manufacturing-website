<?php

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
$unique_id1 = $_POST['unique_product_id'];
$entry_date = date("Y-m-d");
$prev_photo = $_POST['prev_photo'];

$chec=$_FILES["photo"]["tmp_name"];

if($chec!="")
{
	
	if($_FILES["photo"]["tmp_name"])
		{
			$tt1= $_FILES["photo"]["name"];
			$image11=date("d-m")."_".rand().str_replace(" ","_",$tt1);
			move_uploaded_file($_FILES["photo"]["tmp_name"],"product_images/".$image11);
			$imgup=	$image11;
		}

	
}
else
{
	$imgup=	$prev_photo;	
}
$insert = "UPDATE `product_details` SET `product_name`='$product_name', `color`='$color',`shape`='$shape',`size`='$size',`type`='$type',`material`='$material',`capacity`='$capacity',`usage_of_product`='$usage',`mounted`='$mounted',`description`='$description' ,`photo`='$imgup' WHERE `unique_product_id` = '$unique_id1' and `is_del`= 'approved'";

if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Updated Successfully...!");';
    echo'window.location="view_all_products.php";';
    echo'</script>';
}
else
	echo '<script>';
    echo'alert("Failed to Update...!");';
    echo'window.location="view_all_products.php";';
    echo'</script>';
mysqli_close($conn);
?>