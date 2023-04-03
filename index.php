<!DOCTYPE html>
<!-- ICS20-Programming-Unit3-03-PHP-VolumeSphere -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Sphere, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculating the Volume of a Sphere, Using PHP</h1>";
			echo "<h3>This program will calculate the volume of a sphere using the radius as r in cm.</h3>";
		?>
    <center>
    <img src="./images/volume-sphere.png" alt="Volume of a Sphere" width="35%" height="35%">
    </center>
		<!-- form to get radius from the user -->
    <form action="./answers.php" method="post" target="results">
      <label for="lblRadius">Radius, r (cm):</label>
      <input type="text" id="radius" placeholder="Enter Radius (cm)... eg. 5" name="radius"><br><br>
      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
      <center>
			<iframe id="results" name="results">	
				The volume of a sphere with a radius of. "$radius" . cm is. "$volumeRounded" . cm<sup>3</sup>.
	    </iframe>
      </center>
	</body>
</html>