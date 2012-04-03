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

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">

<ul>
        <li class="tabs"><a href="home.php"  action = "home.php">Search</a></li>
        <li class="tabs"><a  href="addCar.php"  action ="addCar.php" >Add Vehicle</a></li>
        <li ><a  href="index.html"  action = "index.php" >Log Out</a></li>

 </ul>  
 
</head>

        


<div align = "left">
	<img src="logo.jpg" alt="logo" />
</div>
	
          <br>
		  <br>
		  <br>
	
	
	
		<div align = "center">
		<form class="box" method = "post" action = "home.php" >
		<fieldset class="boxbody" >
		
		  <label >Search by vehicle make and model (both required): </label>
		  <br>
		  <br>
		  <label >Make</label>
		  <br>
		  <input type="text" id="make" name="make" tabindex="4" placeholder="Make: " required align = "center"> 
		  <br>
		  <label >Model</label>
		  <input type="text" id="model" name="model" />
		  <br>
		  <input type="submit" class="btnLogin" value="Find Car" tabindex="1" align = "center" action = "addCarComplete.php">
		  <br>
		  <br>
		  </br>
		 
		</fieldset>
		</form>
		</div>
		<!-- <div align = "center">  -->
		<form class = "box">
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
  	
    $query = "Select n.firstName, n.lastName, u.phoneNum, CI.make, CI.model, CI.year_model, c.mileage FROM nameid AS n INNER JOIN users AS u ON n.userID = u.userID INNER JOIN carOwnership AS CO ON u.userID = CO.id INNER JOIN cars AS c ON CO.vin = c.vin INNER JOIN carid AS CI ON CI.vin = c.vin WHERE CI.make = 'searchterm' AND CI.model = 'searchterm2';";
  	$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
   			 
   	echo "\n<tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Transmission</th><th>Owner</th><tr>\n\n";
  	
  	while($row = mysqli_fetch_array($result)) {
  			$first = $row['firstName'];
  			$make = $row['make'];
  			$model = $row['model'];
  			$year = $row['year_model'];
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
  	
  	$query = "Select n.firstName, n.lastName, u.phoneNum, CO.vin, CI.make, CI.model, CI.year_model, c.mileage, c.transmission FROM nameid AS n INNER JOIN users AS u ON n.userID = u.userID INNER JOIN carOwnership AS CO ON u.userID = CO.id INNER JOIN cars AS c ON CO.vin = c.vin INNER JOIN carid AS CI ON CI.vin = c.vin;";
  	// $query = "SELECT * FROM cars WHERE make = '$searchterm' ";
  	//$idNum = $_SESSION['idNum'];	
  	$result = mysqli_query($db, $query)
   			or die("Error Querying Database");	
   	echo "<table id=\"hor-minimalist-b\">\n<tr><th></th><th>First Name</th><th>Last Name</th><th>Phone #</th><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Transmission</th><tr>\n\n";
  	
  	while($row = mysqli_fetch_array($result)) {
  			
  			$vin = $row['vin'];
  			$make = $row['make'];
  			$model = $row['model'];
  			$year = $row['year_model'];
  			$mileage = $row['mileage'];
  			$trans = $row['transmission'];  			
   			$fname = $row['firstName'];
   			$lname = $row['lastName'];
   			$phNum = $row['phoneNum'];
   			}
   			
  			
  			echo "<tr><td ><td > $fname</td><td > $lname</td><td > $phNum</td><td> $make</td><td > $model</td><td > $year</td><td > $mileage</td><td > $trans</td></tr>\n";
  
  			} 
  		
  	 echo "</table>\n"; 
  	
  	?>
	</form>
	
	
<footer id="main">
  <a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsh</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
</footer>
<TAGNAME bgcolor="value">
</body>
</html>