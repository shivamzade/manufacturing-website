<?php
include "connect.php";

$product_name = $_POST['product_name'];
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$message = $_POST['message'];
$entry_date = date("Y-m-d");
$unique_id = date("Ymdhis").rand();

$insert = "INSERT INTO `customer_queries`(`unique_id`, `product_name`, `customer_name`, `contact_num`, `email_id`, `location`, `message`, `entry_date`, `is_del`) 
            VALUES ('$unique_id','$product_name','$customer_name','$phone','$email','$location','$message','$entry_date', 'approved')";
$result = mysqli_query($conn, $insert);     
if(isset($result)){
    ?>
    <script>
        alert("Success..!");
        window.location = "index.php";
    </script>
    <?php
}else?> 
    <script>
        alert("Error!");
        window.location = "index.php";
    </script>
?>