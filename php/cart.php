<!--Session Starter-->
<?php

session_start();

?>

<?php

require '../includes/dbh.inc.php';

?>



<!DOCTYPE html>

<html>
  
<head>

  <title>GAM/r | Shopping Cart</title>

  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="../images/logo.png"/>

  <!--Metadata-->
  <meta charset="UTF-8">
  <meta name="description" content="Our goal as a GAM/r is to supply you with your most ideal and comfortable mouse for all your gaming and work needs.">

  <!--Quicksand-->
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!--Share Tech-->
  <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">

  <!--CSS-->
  <link rel="stylesheet" href="../css/styles.css">
  <!--<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/responsive.css">-->

  <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--Javascript-->
  <script src="../js/scripts.js"></script>

  <!--AOS-->
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>



<body>
  
  <!--Navigation-->
  <div class="nav" id="nav">

    <!--Title-->
    <a href="../php/index.php" class="title">GAM/r</a>


  
    <!--Icons-->
    <div class="icons">

      <a href="../php/cart.php"><i class="fas fa-shopping-cart fa-lg fa-fw" aria-hidden="true"></i></a>
      
      <?php
        if (isset($_SESSION['username'])) {
          echo '<a id="logout-icon" onclick="openLogout()"><i class="fas fa-user-circle fa-lg fa-fw" aria-hidden="true" style="color: green;"></i></a>';
        }
        
        else {
          echo '<a href="../php/account.php"><i class="fas fa-user-circle fa-lg fa-fw" aria-hidden="true"></i></a>';
        }
      ?>
    
      
      
      <!--Logout-->
      <div class="logout" id="logout-tab">
        
        <form name="logout" action="../includes/logout.inc.php" method="post">
          
          <button type="submit" name="logout-submit">Logout</button>
          
        </form>
        
      </div>

    </div>



    <!--Links-->
    <div class="links">

      <a href="../php/game-ready.php">Game-Ready</a>
      <a href="../php/build.php">Build Your Own</a>
      <a href="../php/index.php">Home</a>

    </div>

  </div>
    
    
    
    

  <!--Responsive Navigation-->
  <div class="res-nav" id="res-nav">

    <!--OpenNav-->
    <a onclick="openNav()"><i class="fas fa-bars"></i></a>

    <!--Nav Content-->
    <div class="content">

      <a class="current" href="../php/index.php">Home</a>
      <a href="../php/build.php">Build Your Own</a>
      <a href="../html/game-ready.html">Game-Ready</a>


    </div>

  </div>
  
  
  
  
  
  <!--Shopping Cart-->
  <div class="shopping-cart">
    
    <!--Heading-->
    <h1>Shopping Cart</h1>
    
    <!--Cart-->
    <div class="cart">
      
      <?php
      
        $sql = "SELECT name, price, image FROM cart";
        $result = mysqli_query($conn, $sql);
    
        if ($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()) {
            echo
            '<form action="../includes/delete.inc.php" method="post">
              
              <img src="' . $row['image'] . '">
              <input style="font-weight: bold;" type="text" name="name" value=' . $row['name'] . ' readonly>
              <input type="text" name="price" value=$' . $row['price'] . ' readonly>
              
              <button type="submit" name="delete">Delete</button>
            
            </form>';
          }
          
          $sql = 'SELECT SUM(price) AS total FROM cart';
          
          $result = mysqli_query($conn, $sql); 
          $row = mysqli_fetch_assoc($result); 
          $sum = $row['total'];
          
          echo '<h2>Total: $' .$row['total'] . '</h2>';
          
          echo
          '<button style="margin: 2vw; border: solid 0.5vw #1ac5ce; background-color: #1ac5ce; font-size: 1vw; display: inline;" onclick="openCheckout()">Checkout</button>
          
          <form style="width: 10%; display: inline;" action="../includes/clear.inc.php" method="post">
            
            <button style="margin: 2vw; border: solid 0.5vw #bc0019; background-color: #bc0019; font-size: 1vw;" type="submit" name="clear">Clear All</button>
            
          </form>';
          
        }
        
        else {
          
          echo "<p>Your cart is empty</p>";
          
        }
         
      ?>
      
      <?php
    
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
            echo '<p class="error">You must fill in all fields!</p>';
          }
        }
    
      ?>
      
    </div>
    
  </div>
  
  
  
  
  
  <!--Checkout-->
  <div class="checkout" id="checkout">
    
    <form id="form" action="../includes/checkout.inc.php" method="post">
      
      <a onclick="closeCheckout()"><i class="fas fa-times"></i></a>
      
      <h1>Customer Details</h1>
      <input type="text" name="full_name" placeholder="Full Name">
      <input type="text" name="email" placeholder="E-mail">
      <br>
      <h1>Shipping Details</h1>
      <input type="text" name="address" placeholder="Address">
      <input type="text" name="city" placeholder="City">
      <input type="text" name="state" placeholder="State">
      <br><br><br><br><br><br>
      
      <?php
        
        $total = $row['total'];
        
        echo
        '<h2 style="text-align: center; border-style: none; font-size: 2vw;">Total: $' . $total . '</h2>
        <input style="position: fixed; visibility: hidden;" type="text" name="total" value=' . $total . ' readonly>
        <br>'
      
      ?>
      
      <button style="margin: 2vw; border: solid 0.5vw #1ac5ce; background-color: #1ac5ce; font-size: 1vw; display: inline; cursor: pointer;" type="submit" name="checkout">Checkout</button>
      
      <p>**The order will utilize Pay On Delivery (POD).</p>
      
    </form>
    
  </div>
  
</body>

</html>