<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>carBook Home</title>
<link rel="stylesheet" href="demo.css" type="text/css" />


</head>

<div align = "center">
<img src="logo.jpg" alt="logo" />
</div>
<body bgcolor = "Silver">
<div id="wrap">
<div class="pagewrapper">
<div class="innerpagewrapper">
<div class="page">
<div class="content">
<!-- CONTENT -->
<h3>Add Car</h3>
<form method = "post" action = "addCarComplete.php">
<table
<tr><td>Make</td><td><input type = "text" id = "make" name = "make" /></td></tr>
<tr><td>Model</td><td><input type = "text" id = "model" name = "model" /></td></tr>
<tr><td>Year</td><td><input type="text" id="year" name="year" /></td></tr>
<tr><td>Mileage</td><td><input type="text" id="mileage" name="mileage" /></td></tr>
<tr><td>Color</td><td><input type="text" id="color" name="color" /></td></tr>
<tr><td>Asking Price</td><td><input type="text" id="price" name="price" /></td></tr>
<tr><td>VIN</td><td><input type="text" name="vin" id="vin"/>
<tr><td>Transmission:</td><td><input type="text" name="trans" id="trans"/>
<tr><td>&nbsp;</td><td><input type="submit" value="Add" /></td></tr>
<?php
     //session_start();
	 $_SESSION['firstname'] = 
	 $firstName = $_SESSION['firstname'];
	 $lastName = $_SESSION['lastname'];
     $_SESSION['firstname'] = $_POST['firstname'];
     ?>
</table>
</form>
<!-- END CONTENT -->
</div>
</div>
</div>
</div>
</div>


<TAGNAME bgcolor="value">


</div>
<footer id="main">
<div align = "center".
<a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsh</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
</div>
</footer>

</body>
</html>

GRANT all priviledges on campus_meetup.* to 'username' @ 'localhost' identified by 'pw';