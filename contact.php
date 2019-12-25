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
  <li><a class="navbar-brand" href="company.php">Contact Us</li>
  <li style="float:right"><a class="navbar-brand" href="#about"></a>
  
  
</ul>

  <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
   <div class="jumbotron text-center">
   	<h1>Contact Us</h1>
   	<p>Manage your bills on the go!</p>
   </div>

   <div class="container-fluid">
    <form class="form-inline" action="subscribe.php" method="post">
        <div class="input-group">
           <input type="email" class="form-control" name="subs" size="50" placeholder="Email Address" required>
              <div class="input-group-btn">
                <button type="submit" class="btn btn-danger">Subscribe</button>               
              </div>
        </div>
      </form>
    
  </div> <br><br><br>
  <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2><br><br>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Sahayak</p>
      <p><span class="glyphicon glyphicon-phone"></span>998005305</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sahayaksupport@gmail.com</p>
    </div>
    <form action="contactfetch.php" method="post" name="contactfetch">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
        </form>

  <br><br>

  <div class="container-fluid">
       <div class="row">
        <div class="col-sm-10">
          
        </div>
          
      </div>
  </div>       




</body>
</html>