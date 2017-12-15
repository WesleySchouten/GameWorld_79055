<?php
if (isset($_GET['categoryid'])) {
       $categoryid = $_GET['categoryid'];
       $sql ="SELECT gametitle, gameprice, imageid,  FROM games Where categoryid='".$categoryid."'";
   } else {
       $sql ="SELECT gametitle, gameprice, imageid,  FROM games";
   }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Game World. - Enjoy The Greatest games">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GameWorld</title>
  </head>
  <body>
    <header>
      <h1><a href="index.php"><img  src="images/gw.png" width="300px"></a></h1>
    </header>
    <div id="main-container">

   <?php include 'inc/header.php';
         include 'inc/menu.php';
  ;?>

    <div id="banner">
      Welcome to GameWorld
      </div>
      <div id="consoles">
        <a href="games.php?categoryid=1"><img  src="images/playstation.jpg" width="300px"></a>
        <a href="games.php?categoryid=2"><img  src="images/gamecube.jpg" width="300px"></a>
        <a href="games.php?categoryid=3"><img  src="images/steam-games.jpg" width="300px"></a>
      </div>
      <footer> <?php     include 'inc/footer.php'; ?>
    </footer>
    </div>





  </body>

</html>
