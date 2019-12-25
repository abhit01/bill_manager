<?php
include("connect.php");

$name1=$_REQUEST['name'];
$email1=$_REQUEST['email'];
$comments1=$_REQUEST['comments'];

$sql="INSERT INTO contact_fetch VALUES('$name1','$email1','$comments1')";
$query=mysqli_query($con,$sql);
if(!$query)
{
	die("Failed");
}
echo 'submitted successfully';
?>