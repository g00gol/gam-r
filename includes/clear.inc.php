<?php

if(isset($_POST['clear'])) {
	
	require 'dbh.inc.php';
  
  $sql = "DELETE FROM cart WHERE id > 0";
  
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