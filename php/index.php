<!--Session Starter-->
<?php

session_start();

?>





<!DOCTYPE html>

<html>

<head>

  <!--Title-->
  <title>GAM/r | Home</title>

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
      <a class="current" href="../php/index.php">Home</a>

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
      <a href="../php/game-ready.php">Game-Ready</a>


    </div>

  </div>





  <!--Section 1-->
  <div class="section1" id="section1">

    <!--Column 1-->
    <div class="column1">

      <!--Heading-->
      <div class="heading">

        <h1>Design Your Custom Mouse</h1>

      </div>



      <!--Button-->
      <div class="button">

        <a href="../php/build.php">Create Now</a>

      </div>

    </div>



    <!--Column 2-->
    <div class="column2">

      <!--Heading-->
      <div class="heading">

        <h1>Game-Ready Mouse</h1>

      </div>

      <!--Button-->
      <div class="button">

        <a href="../php/game-ready.php">Shop Now</a>

      </div>

    </div>

  </div>





  <!--Section 2-->
  <div class="section2" id="section2">

    <!--Carousel-->
    <div class="carousel">

      <div class="img1"></div>
      <div class="img2"></div>

    </div>



    <!--Overlay-->
    <div class="overlay">
    </div>



    <!--Slant-->
    <div class="slant">
    </div>



    <!--Motto-->
    <div class="motto">

      <h1 data-aos="fade-up">Our goal as GAM/r is to supply you with your most ideal and comfortable mouse for all your gaming and work needs. We offer clean, simple, yet sophisticated templates in which
      anyone is able to access. Furthermore, there is a standalone section for pre-made custom mice, approved by the GAM/r team and the community. Our goal is not to just provide you with a
      mouse; instead, we aim to produce the highest tier mouse for all your needs.</h1>

      <p data-aos="fade-up">
        - GAM/r
      </p>

    </div>

  </div>





  <!--Footer-->
  <div class="index-footer">

    <p>Created by</p><h1>DEVision</h1>

  </div>

</body>

</html>