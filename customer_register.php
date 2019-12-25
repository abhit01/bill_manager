<?php
$conn = mysqli_connect('localhost', 'root','' );
if(!$conn) {
    die('can not connect:'. mysqli_error());
}
else
{
	echo"Your data submitted successfully";
	header("location:customerlogin.php");
}
if(!mysqli_select_db($conn,'bill_manager')) {
    die('cannot select db: '.mysqli_error());
}



	$firstname = $_POST['name1'];
	$lastname = $_POST['name2'];
	$email = $_POST['email'];
	$username =  $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];

$sn="localhost";
$un="root";
$ps="";
$db="bill_manager";

$con=mysqli_connect($sn,$un,$ps,$db);
if(!$con)
{
	die("Failed to connect".mysqli_connect_error());
}

$sql="INSERT INTO customer_register VALUES('$firstname','$lastname','$email','$username','$password','$contact','$address','$city','$state')";
$sql1="INSERT INTO login_customer VALUES('$username','$password','customer')";
$query=mysqli_query($con,$sql);
$query1=mysqli_query($con,$sql1);
if(!$query)
{
	die("Failed");
}
?>