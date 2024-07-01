<?php
session_start();
include "../../connect.php";
include "common_function.php";
$i_id = $_GET['uid'];

$sql = "UPDATE `tbl_gallery_images` SET `is_del` = 'deleted' WHERE `unique_id` = '$i_id' ";

if(mysqli_query($conn, $sql)== TRUE){
    echo "<script>";
    
    echo "    alert('Deleted Successfully...!');";
    echo "    window.location='view_gallery_images.php';";
    
    echo "</script>";
}else {
    // If there was an error during execution
    echo "Error executing query: " . htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8');
}
mysqli_close($conn);
?>