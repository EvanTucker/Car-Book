<?php
session_start();
setcookie('zip',$post['zip'] , time() + 60*60*24);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>carBook</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<div id="contents">
<?php
  
  include "dbconnect.php";
  $name = $_POST['username'];
  $pw = $_POST['pw'];
  echo $name;
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
   		echo "<p>Incorrect login.</p>\n";
   		echo "$name";
   		
   		echo  "<p><a href=\"index.php\">Click to try again.</a></p>";
    }
   
  
?>
  
  </div>