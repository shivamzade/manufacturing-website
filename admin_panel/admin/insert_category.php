<?php
include "common_function.php";
include "../../connect.php";

$category_name = $_POST['category_name'];
$category_id= rand().date("Ymdhis");
$entry_date = date("Y-m-d");

$insert = "INSERT INTO `product_category`(`id`, `category_id`, `category_name`, `entry_date`, `is_del`) 
            VALUES ('','$category_id','$category_name','$entry_date','approved')";
$result = mysqli_query($conn, $insert);

if(isset($result)){
    ?>
    <script>
        alert("Success..!");
        window.location = "view_all_categories.php";
    </script>
    
    
    <?php
}else?>
    <script>
        alert("Error!");
        window.location = "view_all_categories.php";
    </script>
?>