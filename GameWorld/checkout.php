<?php

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
      <h1> <a href="index.php"><img src="images/gw.png" width="300px"></a></h1>
    </header>
    <div id="main-container">



   <?php include 'inc/header.php';
         include 'inc/menu.php';
  ;?>
  <div class="aboutcontainer">
      <table id="checkout-table">
      <thead>
        <th>Image</th>
        <th>Game</th>
        <th>Description</th>
        <th>Total</th>
      </thead>
        <tbody>
          <tr>
            <td><img class="checkoutimage" src="images/mp5.jpg" width="150px" height="200px"></td>
            <td>Marioparty 5</td>
            <td>Lorem Ipsum</td>
            <td>&euro; 22,45</td>
          </tr>
          <tr>
            <td><img class="checkoutimage" src="images/pubg.jpg" width="150px" height="200px"></td>
            <td>player unknown battlegrounds</td>
            <td>Lorem Ipsum</td>
            <td>&euro; 29,99</td>
          </tr>
          <tfoot>
            <tr>
              <td id="total">Total</td>
              <td colspan="4">&euro; 52,44</td>
            </tr>
          </tfoot>
        </tbody>
    </table></div>

</div>
  <footer> <?php     include 'inc/footer.php'; ?>
</footer>
</body>
</html>
