<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Complete</title>
<link rel="stylesheet" href="demo.css" type="text/css" />

</head>
<body bgcolor = "Silver">
<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>You have successfully completed new user registration. </h3>
					<p></p>
					
					<label><a href="index.html" class="rLink" tabindex="5">Proceed to login page</a></label>
					
					<?php
					include('dbconnect.php');
					$username = $_POST['username'];
					$pw = $_POST['password'];
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$email = $_POST['email'];
					$phNum = $_POST['phone'];
					$city = $_POST['city'];
					$stateLoc = $_POST['state'];
					$zipCode = $_POST['zip'];
					$status = $_POST['carPref'];
					if(isset($_POST['buy']))
					{
						$buyInterest = True;
					}
					else
					{
						$buyInterest = False;
					}
					if(isset($_POST['sell']))
					{
						$sellInterest = True;
					}
					else
					{
						$sellInterest = False;
					}
					$yrsOwner = $_POST['ownerLength'];
					$query = "INSERT INTO users (username, password, firstName, lastName, email, phoneNum, city, locState, vecType, buy, sell, yrsOwn, zipcode) VALUES ('$username', SHA('$pw'), '$firstname', '$lastname', '$email', '$phNum', '$city', '$stateLoc', '$status', '$buyInterest', '$sellInterest', '$yrsOwner', '$zipCode')"; 
					$result = mysqli_query($db, $query) or die("Error Querying Database");
					
					mysqli_close($db);
					
					?>
					
					
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				   


			</div>
		</div>
	</div>
</div>
<TAGNAME bgcolor="value">

</body>
