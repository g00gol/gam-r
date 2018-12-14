<?php

if(isset($_POST['delete'])) {
	
	require 'dbh.inc.php';

  $name = $_POST['name'];
  $price = $_POST['price'];
  
  $sql = "DELETE FROM cart WHERE name = '$name'";
  
  if (!mysqli_query($conn, $sql)) {
  	header("Location: ../php/cart.php?error=deleteFail");
		exit();
  }
  
  else {
		header("Location: ../php/cart.php?delete=success");
		exit();
	}
  
}

else {
	header("Location: ../php/cart.php");
	exit();
}