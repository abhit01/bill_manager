<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
?>
<!DOCTYPE html>
<html>
<head>

	<title>Cumulative Bill Manager</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="styles.css">
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <style>
      
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

<ul>
  <li><a class="navbar-brand" href="main.php"><b>Sahayak</b></a></li>
  <li><a class="navbar-brand" href="company.php">Features</a></li>
  <li><a class="navbar-brand" href="company.php">About</a></li>
  <li><a class="navbar-brand" href="company.php">Careers</a></li>
  <li><a class="navbar-brand" href="contact.php">Contact Us</li>
  <li style="float:right"><a class="navbar-brand" href="#about"></a>
  
  
</ul>

  <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
   <div class="jumbotron text-center">
   	<h1> Sahayak</h1>
   	<p>Manage your bills on the go!</p>
   </div>

   <div class="container-fluid">
    <center><h1>Login as </h1></center><br>
   	<center><a href="sellerlogin.php"><button type="button" class="btn btn-primary btn-lg">Seller</button></a></center> <br>
    <center>&nbsp;<a href="customerlogin.php"><button type="button" class="btn btn-primary btn-lg">Customer</button></a></center>
  </div> <br><br>

  <div class="container-fluid">
       <div class="row">
        <div class="col-sm-10">
          
        </div>
          
      </div>
  </div>       




</body>
</html>