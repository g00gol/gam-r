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

  <!--Title-->
  <title>GAM/r | Game-Ready</title>

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
  <link rel="stylesheet" type="text/css" href="../css/styles.css">

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
  <div class="nav" id="nav" style="background-color: #262626;">

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

      <a class="current" href="../php/game-ready.php">Game-Ready</a>
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

      <a href="../php/index.php">Home</a>
      <a href="../php/build.php">Build Your Own</a>
      <a href="../html/game-ready.html">Game-Ready</a>


    </div>

  </div>





  <!--Sub-Navigation-->
  <div class="sub-nav">

    <h1>Game-Ready</h1>
    <p>The selection of mice approved by the GAM/r team and our personal community.</p>

    <div class="nav-icons" id="nav-icons">

      <a href="#lol"><img src="../images/icons/leagueIcon.png"></a>
      <a href="#overwatch"><img src="../images/icons/overwatchIcon.png"></a>
      <a href="#pubg"><img src="../images/icons/pubgIcon.png"></a>
      <a href="#wow"><img src="../images/icons/wowIcon.png"></a>
      <a href="#fortnite"><img src="../images/icons/fortniteIcon.png"></a>
      <a href="#battlerite"><img src="../images/icons/battleriteIcon.png"></a>

    </div>

  </div>





  <!--Featured-->
  <a href="#lol" id="featured"><div class="featured"></div></a>
  <!--Yes, this is an edited image...the real mouse is "ROCCAT Kone+"-->





  <!--League of Legends-->
  <div class="lol" id="lol">

    <!--Header-->
    <div class="header">

      <h1>League of Legends</h1>

    </div>
    
    
    
    <!--Content-->
    <div class="content">
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 1");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 1");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 1");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>

      <!--Raz/r Naga Hex-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 2");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 2");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>Raz/r Naga Hex</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 2");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G602-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 3");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 3");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 3");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G502-->
      <div class="container" style="top: 10%;">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 4");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 4");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 4");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Dankcat Kone Plus-->
      <div class="container" style="top: 10%;">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 9");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 9");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 9");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>





  <!--Overwatch-->
  <div class="overwatch" id="overwatch">

    <!--Header-->
    <div class="header">

      <h1>Overwatch</h1>

    </div>
    
    
    
    <!--Content-->
    <div class="content" style="top: 35%;">
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 5");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 5");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 5");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>

      <!--Log/tech G602-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 6");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 6");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 6");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G502-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 7");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 7");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 7");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>





  <!--PUBG-->
  <div class="pubg" id="pubg">

    <!--Header-->
    <div class="header">

      <h1>PlayerUnknown's Battleground</h1>

    </div>
    
    
    
    <!--Content-->
    <div class="content" style="top: 35%;">
      
      <!--Log/tech G502-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 8");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 8");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 8");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 10");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 10");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 10");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>
  
  
  
  
  
  <!--WoW-->
  <div class="wow" id="wow">

    <!--Header-->
    <div class="header">

      <h1>World of Warcraft</h1>

    </div>
    
    <!--Content-->
    <div class="content" style="top: 35%;">
      
      <!--Log/tech G502-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 11");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 11");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 11");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 12");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 12");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 12");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Raz/r Naga-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 13");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 13");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 13");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G602-->
      <div class="container" style="top: 10%;">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 14");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 14");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 14");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>

  
  
  
  
  <!--Fortnite-->
  <div class="fortnite" id="fortnite">

    <!--Header-->
    <div class="header">

      <h1>Fortnite</h1>

    </div>
    
    
    
    <!--Content-->
    <div class="content" style="top: 35%;">
      
      <!--Log/tech G502-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 15");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 15");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 15");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 16");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 16");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 16");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>
  
  
  
  
  
  <!--Battlerite-->
  <div class="battlerite" id="battlerite">

    <!--Header-->
    <div class="header">

      <h1>Battlerite</h1>

    </div>
    
    
    
    <!--Content-->
    <div class="content" style="top: 35%;">
      
      <!--Raz/r Deathadder Elite-->
      <div class="container">
		
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 17");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 17");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 17");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>

      <!--Raz/r Naga Hex-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 18");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 18");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>Raz/r Naga Hex</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 18");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G502-->
      <div class="container">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 19");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 19");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 19");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
      <!--Log/tech G602-->
      <div class="container" style="top: 10%;">
	  
        <div class="image" style="background-image: url(<?php
              
          $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 20");
          
          while($row = mysqli_fetch_array($result)){
            echo $row['image'];
          }
          
        ?>
        );">
        </div>
        
        <!--Footer-->
        <div class="footer">
          
          <?php
            
            $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 20");
              
              while($row = mysqli_fetch_array($result)){
                
                echo '<h1>' . $row['name'] . '</h1><p>$' . $row['price'] . '</p>';
                
              }
            
          ?>
          
          <form action="../includes/addToCart.inc.php" method="post">
            
            <!--Product Information-->
            <?php
              
              $result = mysqli_query($conn, "SELECT * FROM gameReady WHERE id = 20");
              
              while($row = mysqli_fetch_array($result)){
                echo
                '<input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="image" value=' . $row['image'] . '>
                <input type="text" name="abbr" value=' . $row['abbr'] . '>
                <input type="text" name="price" value=' . $row['price'] . '>';
              }
              
            ?>
            
            <button type="submit" name="addToCart-submit">Add to Cart</button>
            
          </form>
          
        </div>
        
      </div>
      
    </div>

  </div>
  
  
  
  
  
  <!--Back to Top-->
  <span class="toTop">
    
    <a href="#featured"><i class="fas fa-angle-up" href="#featured"></i></a>
  
  </span>

</body>

</html>
