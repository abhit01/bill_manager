<?php
include("connect.php");

$subc=$_REQUEST['subs'];

$sql="INSERT INTO contact VALUES('$subc')";
$query=mysqli_query($con,$sql);
if(!$query)
{
	die("Failed");
}
header("Location:contact.php")

?>