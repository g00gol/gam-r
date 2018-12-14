<?php

if (isset($_POST['addToCart-submit'])) {
  
  require 'dbh.inc.php';
  
  $name = $_POST['abbr'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  
  $sql = "INSERT INTO cart (name, price, image) VALUES (?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
  
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../php/game-ready.php?error=sqlerror");
    exit();
  }
  
  else {
    mysqli_stmt_bind_param($stmt, "sss", $name, $price, $image);
    mysqli_stmt_execute($stmt);
    header("Location: ../php/game-ready.php?addToCart=success");
    exit();
  }
  
}

else {
  header("Location: ../php/game-ready.php?error=addToCartFail");
  exit();
}