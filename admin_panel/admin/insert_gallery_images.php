<?php
include "../../connect.php";
include "common_function.php";

$entry_date = date("Y-m-d");
$unique_id = date("Ymdhis") . rand();
$image1 = null;

if (isset($_FILES["photo"]) && $_FILES["photo"]["tmp_name"]) {
    $tt1 = $_FILES["photo"]["name"];
    $image1 = date("d-m") . "_" . rand() . str_replace(" ", "_", $tt1);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], "gallery_images/" . $image1)) {
        $insert = "INSERT INTO `tbl_gallery_images`(`unique_id`, `gallery_image`, `entry_date`, `is_del`) VALUES ('$unique_id', '$image1','$entry_date','approved')";
        
        if (mysqli_query($conn, $insert)) {
            echo '<script>';
            echo 'alert("Added Successfully...!");';
            echo 'window.location="view_gallery_images.php";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("Failed to add image to database...!");';
            echo 'window.location="add_gallery_images.php";';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Failed to upload image...!");';
        echo 'window.location="add_gallery_images.php";';
        echo '</script>';
    }
} else {
    echo '<script>';
    echo 'alert("No file uploaded or upload error...!");';
    echo 'window.location="add_gallery_images.php";';
    echo '</script>';
}
?>
