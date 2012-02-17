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
<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>New User Registration</h3>
					
					<form method = "post" action = "report2.php">
					<table>
					<tr><td>First Name</td><td><input type="text" id="firstname" name="firstname" /></td></tr>
					<tr><td>Last Name</td><td><input type="text" id="lastname" name="lastname" /></td></tr>
					<tr><td>Email</td><td><input type="text" id="email" name="email" /></td></tr>
					<tr><td>Phone Number</td><td><input type="text" id="phone" name="phone" /></td></tr>
					<tr><td>Location (city)</td><td><input type="text" name="city" id="city"/> 
					
					<select name="state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select></td></tr>
					
					<tr><td>Which type of vehicle are you interested in viewing?</td><td>
						<input type = "radio" name = "carPref" value = "new" checked/>New<br>
						<input type = "radio" name = "carPref" value = "used"/>Used<br>
					</td></tr>
					<tr><td>Interested in buying</td><td><input type = "checkbox" value = "slimey" name = "slimey"/></td></tr>
					<tr><td>Interested in selling</td><td><input type = "checkbox" value = "furry" name = "furry"/></td></tr>
					</br>
					<tr><td>How long have been an automotive owner?<td><td>1 year <input type="range" name="ownerLength" min="1" max="20" step="1" value="5"/>20+</td></tr>
					</br>
					</br>
					<tr><td>&nbsp;</td><td><input type="submit" value="Register" /></td></tr>
					</table>
					
					</form>
					<!-- END CONTENT -->
					
				</div>
			</div>
		</div>
	</div>
</div>


<TAGNAME bgcolor="value">
<body bgcolor = "Silver">

</div>
<footer id="main">
	<div align = "center".
  		<a>Kevin Tyler, Evan Tucker, Sally Mathis, and Steve Walsch</a> | <a href="http://www.premiumpixels.com">Base Layout Powered by CSS Junction and Premium Pixels</a>
	</div>
</footer>

</body>
</html>

GRANT all priviledges on campus_meetup.* to 'username' @ 'localhost' identified by 'pw';