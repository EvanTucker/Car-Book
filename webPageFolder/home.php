<!DOCTYPE HTML>
<html>
<head>
<title>carBook</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
<header>
<ul>
		<fieldset class= "tab">
        <li class="tab1"><a href="#home" class="current">Home</a></li>
        <li class="tab2"><a href="#add vehicle">Add Vehicle</a></li>
        <li class="tab3"><a href="#log out">Log Out</a></li>
            </ul>
<body>
</br>
</br>
<div align = "center">
	<img src="logo.jpg" alt="logo" />
</div>
	
          <br>
		  <br>
		  <br>
	<form class="panel" method = "post" action = "home.php">
		<fieldset class="box">
		  <label>Search by vehicle make: </label>
		  <br>
		  <br>
		  <label>Make</label>
		  <input type="text" id="make" name="make" />
		  <!-- <input type="text" tabindex="1" placeholder="Make: " required> -->
		  <br>
		  <br>
		  <!-- 
<br>
		  <label>Model</label>
		  <input type="text" tabindex="2" placeholder="Model" required>
		  </br>
 -->
		  <br>
		  </br>
		  <input type="submit" class="btnLogin" value="Find Car" tabindex="4">
		</fieldset>
		<footer>
		<?php
  include "dbconnect.php";
  if (isset($_POST['make']))
  {
  	$searchterm = $_POST['make'];
  	$searchterm = mysqli_real_escape_string($db, trim($searchterm));
  	$query = "SELECT * FROM cars WHERE make = '$searchterm' ";
  	
  	$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
   			
   	echo "<table id=\"hor-minimalist-b\">\n<tr><th>Make</th><td></td><th>Model</th><td></td><th>Year</th><td></td><th>Mileage</th><td></td><th>Transmission</th><td></td><th>Owner</th><tr>\n\n";
  	
  	while($row = mysqli_fetch_array($result)) {
  			$make = $row['make'];
  			$model = $row['model'];
  			$year = $row['year_made'];
  			$mileage = $row['mileage'];
  			$trans = $row['transmission'];
  			$owner = $row['owner#'];
  			echo "<tr><td >$make</td><td></td><td > $model</td><td></td><td >$year</td><td></td><td >$mileage</td><td></td><td >$trans</td><td></td><td >$owner</td></tr>\n";
  	}
  	 echo "</table>\n"; 
  	}
  	?>
		</footer>
	</form>
	
<footer id="main">
  <a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsch</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
</footer>
</body>
</html>