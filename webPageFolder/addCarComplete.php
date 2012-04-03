<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Car Posted</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">

</head>
<body bgcolor = "Silver">
<div id="wrap">
<div class="pagewrapper">
<div class="innerpagewrapper">
<div class="page">
<div class="content">
<!-- CONTENT -->
<form class="box" method = "post" action = "login.php" >
<fieldset class="boxBody">

<p></p>
<label><a href="home.php" class="rLink" tabindex="5">Your Car Had Been Added: Click Here To Return to main page.</a></label>
<?php
include('dbconnect.php');
$id = $_SESSION['idNum'];
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$mileage = $_POST['mileage'];
$color = $_POST['color'];
$price = $_POST['price'];
$vin = $_POST['vin'];
$transmission = $_POST['trans'];

// $query = "INSERT INTO cars (make, model, year_made, mileage, color, price, vin, transmission) 
// VALUES ('$make', '$model', '$year', '$mileage', '$color', '$price', '$vin', '$transmission')";

$query = "INSERT INTO cars (vin, mileage, price, color, transmission, description) VALUES
('$mileage', '$price', '$color', '$transmission')";

$query2 = "INSERT INTO carOwnership (id, vin) VALUES ('$id', '$vin')";

$query3 = "INSERT INTO carid (vin, make, model, year_model) VALUES
('$vin', '$model', '$year')";


$result = mysqli_query($db, $query) or die("Error Querying Database");
$result2 = mysqli_query($db, $query2) or die("Error Querying Database");
$result3 = mysqli_query($db, $query3) or die("Error Querying Database");

mysqli_close($db);

//echo "<p>QUERY $query </p>";
?>
</fieldset>
</form>
<!-- END CONTENT -->
</div>


</div>
</div>
</div>
</div>
<TAGNAME bgcolor="value">

</body>