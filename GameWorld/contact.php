<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Game World. - Enjoy The Greatest Hits">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GameWorld</title>
  </head>
  <header>
        <h1><a href="index.php"><img src="images/gw.png" width="300px"></a></h1>
      </header>
  <body>
    <div id="main-container">



   <?php include 'inc/header.php';
         include 'inc/menu.php';
  ;?>
  <div class="container">
		  <form action="">

		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="firstname" placeholder="Your name..">

		    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


			 <label for="Email">E-mail</label>
			 <input type="text" id="lname" name="E-mail" placeholder="Your E-mail..">


		    <label for="subject">Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:90px"></textarea>

		    <input type="submit" value="Submit">

		  </form>
		</div>
</div>


  </body>
   <?php     include 'inc/footer.php'; ?>

</html>
