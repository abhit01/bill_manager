<?php
$conn = mysqli_connect('localhost', 'root','' );
if(!$conn) {
    die('can not connect:'. mysqli_error());
}
else
{
  echo"Customer Added Successfully";
}
if(!mysqli_select_db($conn,'bill_manager')) {
    die('cannot select db: '.mysqli_error());
}



  $firstname = $_POST['name1'];
  $lastname = $_POST['name2'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $address = $_POST['address'];

$sn="localhost";
$un="root";
$ps="";
$db="bill_manager";

$con=mysqli_connect($sn,$un,$ps,$db);
if(!$con)
{
  die("Failed to connect".mysqli_connect_error());
}

$sql="INSERT INTO new_customer VALUES('$firstname','$lastname','$email','$contact','$address')";
$query=mysqli_query($con,$sql);
if(!$query)
{
  die("Failed");
}
?>