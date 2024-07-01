<?php
session_start();
include "../../connect.php";
include "common_function.php";
$id = $_GET['id'];

$sql = "UPDATE `product_details` SET `is_del` = 'deleted' WHERE `unique_product_id` = '$id' ";

if(mysqli_query($conn, $sql)== TRUE){
    echo "<script>";
    echo "    alert('Deleted Successfully...!');";
    echo "    window.location='view_all_products.php';";
    echo "</script>";
}else {
    // If there was an error during execution
    echo "Error executing query: " . htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8');
}
mysqli_close($conn);
?>