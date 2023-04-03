<?php
	// get the radius from the text field
	$radius = $_POST['radius'];

	// calculate the volume
	$volume = (4/3 * pi () * $radius ** 3);
  $volumeRounded = round($volume, 2);
?>
<h3>Results:</h3>
The volume of a sphere with a radius of <?php echo "$radius" ?> cm is <?php echo "$volumeRounded" ?>cm<sup>3</sup>.