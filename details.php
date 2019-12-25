<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
?>
<!DOCTYPE html>
<html>
<head>

	<title>Customer Records</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="styles.css">
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <style>


  input[type=submit] {

  width: 5%;
  background-color: #4CAF50;
  color: white;
  padding: 3px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
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
  padding: 10px 25px;
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


  <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
<ul>
  <li><a class="navbar-brand" href="main.php"><b>CBM</b></a></li>
  <li><a class="navbar-brand" href="company.php">Features</a></li>
  <li><a class="navbar-brand" href="company.php">Blog</a></li>
  <li><a class="navbar-brand" href="company.php">Download</a></li>
  <li><a class="navbar-brand" href="company.php">Testimonial</li>
  <li style="float:right"><a class="navbar-brand" href="#about">Web Sign-In</a>
  
  
</ul>
   <div class="jumbotron text-center">
   	<h1>Customer's Inventory</h1>
   	<p>Manage your bills on the go!</p>
   </div>

  <div align="center">
    <form action="/action_page.php" name="search_form">
      <input type="text" placeholder="Search.." name="search">
      <input type="submit" value="submit" name="search"></button>
    </form>
  </div>
 




</body>
</html>