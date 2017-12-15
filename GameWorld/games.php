<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vak";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//$sql = "SELECT id, gametitle, gamedescription, gameprice, categoryid, imageid FROM games";

if (isset($_GET['categoryid'])) {
       $categoryid = $_GET['categoryid'];
       $sql ="SELECT gametitle, gameprice, imageid FROM games Where categoryid='".$categoryid."'";
   } else {
       $sql ="SELECT gametitle, gameprice, imageid FROM games";

   }
   $result = $conn->query($sql);
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
      <h1><a href="index.php" ><img  src="images/gw.png" width="300px"></a></h1>
    </header>
    <div id="main-container">


   <?php include 'inc/header.php';
         include 'inc/menu.php';
  ;?>
  <div id="products">

    <div class="Product-item">
      <?php if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {


           ?>
           <div class="product-item">
          <div class="plaatje"><img src= <?php echo $row["imageid"]; ?> width="150" height="200" ></div>

          <h2 class="gameName"><?php echo $row["gametitle"]; ?></h2>
          <div class="order"><h4>Order</h4></div>
          <div class="price"><?php echo $row["gameprice"]; ?></div>


</div>
<?php   }} ?>

 <nav class="order"></nav>
</div>
    <div class="clearfix"></div>
</div>
  <footer> <?php     include 'inc/footer.php'; ?>
</footer>
</div>
</body>
</html>
