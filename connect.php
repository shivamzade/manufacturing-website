<?php 
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="dreams_autofiber_glass"; // Database name

	$conn = new mysqli($host, $username, $password, $db_name);
	mysqli_report(MYSQLI_REPORT_ERROR);
?>