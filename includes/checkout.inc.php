<?php

if(isset($_POST['checkout'])) {
	
	require 'dbh.inc.php';

  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $total = $_POST['total'];
  
  if (empty($name) || empty($email) || empty($address) || empty($city) || empty($state)){
    header("Location: ../php/cart.php?error=emptyfields");
    exit();
  }
  
  else {
    
    $sql = "INSERT INTO orders (full_name, email, address, city, state, price) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../php/cart.php?error=sqlerror");
      exit();
    }
    
    else {
      mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $address, $city, $state, $total);
      mysqli_stmt_execute($stmt);
      header("Location: ../php/cart.php?checkout=success");
      exit();
    }
    
  }
}

else {
	header("Location: ../php/cart.php");
	exit();
}