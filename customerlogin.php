<!DOCTYPE html>
<html>
<head>
	<title>Customer Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  	
body {
  font-size: 120%;
  background-repeat: no-repeat;
  background-size: 1350px;
  
}

input {
  width:auto;
}

table {
  border-collapse: collapse;
  border: 2px solid black;
}

td {
  padding: 6px;
  letter-spacing: 1px;
}
div {
  padding: 20px 10px 75px 90px;
}

input[type=submit] {
  width: 47%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 }

 input[type=reset] {
  width: 46%;
  background-color: #ff3333;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 }

 input[type=text] {
  width: 70%;
  padding: 10px 60px;
  margin: 3px 0;
  box-sizing: border-box;
}

input[type=number] {
  width: 70%;
  padding: 10px 100px;
  margin: 3px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 70%;
  padding: 10px 100px;
  margin: 3px 0;
  box-sizing: border-box;
}

 input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
  background-color: #e60000;
}

input[type=number]:focus {
  background-color: #f2f2f2;
}

label{
    display:inline-block;
    min-width:100px
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #4EBF6E;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 25px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #00000;
}

  </style>
</head>
<body>

		<ul>
  <li><a class="navbar-brand" href="main.php"><b>Sahayak</b></a></li>
  <li><a class="navbar-brand" href="company.php">Features</a></li>
  <li><a class="navbar-brand" href="company.php">About</a></li>
  <li><a class="navbar-brand" href="company.php">Careers</a></li>
  <li><a class="navbar-brand" href="company.php">Contact Us</li>
  <li style="float:right"><a class="navbar-brand" href="#about"></a>
  
  
</ul>




		<h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Login</h1>
		<div><table border="1" align="center">
			<form name="form1" method="post" action="customer_login.php">
				<tr><td><label>Username</label>
				<input type="text" name="uname" required="required"></td></tr>
				
				<tr><td><label>Password</label>
				<input type="password" name="pass" required="required"></td></tr>

				<tr><td><input type="submit" value="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"></td></tr>
				<tr><td><a href="forgot">Forgot Password?</a></td></tr>

				<tr><td>Not yet a member? <a href="customerregister.php">Sign up</a></td></tr>

			</form>
		</table></div>

</body>
</html>