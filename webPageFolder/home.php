<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>carBook</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<!-- 
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
 -->
<header>
<ul>
		<fieldset class= "tab">
        <li class="tab1"><a href="home.php"  class="current" >Search</a></li>
        <li class="tab2"><a  href="addCar.php" class = "current" action ="addCar.php">Add Vehicle</a></li>
        <li class="tab3"><a  href="index.html" class = "current" action = "index.php" >Log Out</a></li>
            </ul>
<body bgcolor = "Silver">
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
		<div align = "center">
		  <label>Search by vehicle make and model (both required): </label>
		  <br>
		  <br>
		  <label>Make</label>
		  
		   <input type="text" id="make" name="make" tabindex="1" placeholder="Make: " required> 
		  <br>
		  <label>Model</label>
		  <input type="text" id="model" name="model" />
		  <br>
		  <input type="submit" class="btnLogin" value="Find Car" tabindex="4" align = "center">
		  <br>
		  <br>
		  </br>
		  </div>
		</fieldset>
		<div align = "center"> 
		<?php
  include "dbconnect.php";
  //
  if (isset($_POST['make']))
 {
  if(isset($_Post['model']))
  {
  	$searchterm = $_POST['make'];
  	$searchterm = mysqli_real_escape_string($db, trim($searchterm));
  	$searchterm2 = $_POST['model'];
  	$searchterm2 = mysqli_real_escape_string($db, trim($searchterm2));
  	
    $query = "SELECT * FROM carOwnership NATURAL JOIN cars WHERE carOwnership.vin IN (SELECT vin FROM cars WHERE make = '$searchterm' AND model = '$searchterm2')";
  	$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
   			 
   	echo "\n<tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Transmission</th><th>Owner</th><tr>\n\n";
  	
  	while($row = mysqli_fetch_array($result)) {
  			$id = $row['id'];
  			$make = $row['make'];
  			$model = $row['model'];
  			$year = $row['year_made'];
  			$mileage = $row['mileage'];
  			$trans = $row['transmission'];
  			//$owner = $row['owner#'];
  			echo "$id";
  			echo "<table id=\"hor-minimalist-b\"><tr><td >$id </td><tr><tr><td >$make </td><tr><td > $model</td><td > $year</td><td > $mileage</td><td > $trans</td><td > $owner</td></tr>\n";
  	} 
  	}
  	else
	$searchterm = $_POST['make'];
  	$searchterm = mysqli_real_escape_string($db, trim($searchterm));
  	$searchterm2 = $_POST['model'];
  	$searchterm2 = mysqli_real_escape_string($db, trim($searchterm2));
  	
  	$query = "SELECT carOwnership.id, carOwnership.vin, cars.model, cars.make, cars.year_made, cars.mileage, cars.transmission FROM carOwnership NATURAL JOIN cars WHERE carOwnership.vin IN (SELECT vin FROM cars WHERE make = '$searchterm' AND model = '$searchterm2')";
  	// $query = "SELECT * FROM cars WHERE make = '$searchterm' ";
  	$idNum = $_SESSION['idNum'];
  	
  	$result = mysqli_query($db, $query)
   			or die("Error Querying Database");	
   	echo "<table id=\"hor-minimalist-b\">\n<tr><th></th><th>First Name</th><th>Last Name</th><th>Phone #</th><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Transmission</th><tr>\n\n";
  	
  	while($row = mysqli_fetch_array($result)) {
  			$id = $row['id'];
  			$vin = $row['vin'];
  			$make = $row['make'];
  			$model = $row['model'];
  			$year = $row['year_made'];
  			$mileage = $row['mileage'];
  			$trans = $row['transmission'];
  			
  			$query2 = "SELECT users.firstName, users.lastName, users.phoneNum FROM users NATURAL JOIN carOwnership WHERE users.id IN (SELECT carOwnership.id FROM carOwnership NATURAL JOIN cars WHERE carOwnership.vin IN (SELECT vin FROM cars WHERE make = '$searchterm' AND model = '$searchterm2'))";
  			$result2 = mysqli_query($db, $query2)
   			or die("Error Querying Database");	
   			while($row = mysqli_fetch_array($result2)) {
   				$fname = $row['firstName'];
   				$lname = $row['lastName'];
   				$phNum = $row['phoneNum'];
   			}
   			
  			
  			echo "<tr><td ><td > $fname</td><td > $lname</td><td > $phNum</td><td> $make</td><td > $model</td><td > $year</td><td > $mileage</td><td > $trans</td></tr>\n";
  
  			} 
  		
  	 echo "</table>\n"; 
  	}
  	?>
	</form>
	
<footer id="main">
  <a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsch</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
</footer>
<TAGNAME bgcolor="value">
</body>
</html>