<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Add Customer</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Registration Page</title>
  <script type="text/javascript">
    function matchpass()
    {  
  var x=document.form.email.value;  
  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf(".");  
  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
    return false;  
    }  
}  
</script>


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
  background-color: #4EBF6E;
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
  <li><a class="navbar-brand" href="main.php"><b>CBM</b></a></li>
  <li><a class="navbar-brand" href="company.php">Features</a></li>
  <li><a class="navbar-brand" href="company.php">Blog</a></li>
  <li><a class="navbar-brand" href="company.php">Download</a></li>
  <li><a class="navbar-brand" href="company.php">Testimonial</li>
  <li style="float:right"><a class="navbar-brand" href="main.php">Web Sign-In</a></li></a></li></ul><br>

  <h1 align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add New Customer</strong></h1>

  
    <div> 
    <table border=1 align="center">
    <form name="form" action="add_customer.php" method="post" onsubmit="return matchpass()">
      <tr><td><label>First name</label>
      <input type="text" name="name1" required="required"></td></tr>

      <tr><td><label>Last name</label>
      <input type="text" name="name2" required="required"></td></tr>

      <tr><td><label>Email</label>
      <input type="text" name="email" required="required"></td></tr>

      <tr><td><label>Contact</label>
      <input type="text" name="phone" required="required"></td></tr>

      <tr><td><label>Address</label>
      <input type="text" name="address" id='add'></td></tr>

      <tr><td><input type="submit" value="submit"> <input type="reset"></td></tr>
    
        
    </form> 
  </table></div>

</body>
</html>