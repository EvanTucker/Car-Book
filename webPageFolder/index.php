<?php
session_start();
// setcookie('zip',$post['zip'] , time() + 60*60*24);
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
</head>

<body>
</br>
</br>
<div align = "center">
	<img src="logo.jpg" alt="logo" />
</div>
	<!--<form class="box login" method = "get" action = "home.php">
		<fieldset class="boxBody">
<label>Username</label>
		  <input type="text" tabindex="1" name = "username" placeholder="Enter username" required>
		  <label>Password</label>
		  <input type="text" tabindex="2" name = "pw" placeholder="Enter password" required>
		  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a></label>
		  </br>
		  <label><a href="newUser.php" class="rLink" tabindex="5">New User</a></label>
			<label><input type="checkbox" tabindex="3">Keep me logged in</label>
		  <input type="submit" class="btnLogin" value="Login" tabindex="4">
 -->
			<?php
			include "dbconnect.php";
  			$name = $_POST['username'];
  			$pw = $_POST['pw'];
  			
  			echo $name;
  			echo $pw;
  
  			$query = "select * from users WHERE username = '$name' AND password = SHA('$pw')";
   			$result = mysqli_query($db, $query);
  		    if ($row = mysqli_fetch_array($result))
   			{
   				$_SESSION['zip'] = $row['zipcode'];
   				echo "<p>Thanks for logging in, $name</p>\n";
   				echo "<p><a href=\"home.php\">Continue</a></p>";
   			}
  			else
   			{
   			echo "<p>Incorrect username or password</p>\n";
   			echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login.php\">";
    		echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
       		echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
        	echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"createAccount.php\">Create Account</a></p>";
    		}		
   		    ?>
		</fieldset>
		<footer>
		  
		</footer>
	<!-- </form> -->
<footer id="main">
  <a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsch</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
</footer>
</body>
</html>
