<?php
session_start();
include("connect.php");

$a=$_REQUEST['uname'];
$b=$_REQUEST['pass'];


$res1="INSERT INTO status_login_customer VALUES('$a','yes','customer')";
$res="SELECT * FROM login_customer WHERE username='$a' AND password='$b'";
$res2="SELECT status FROM status_login WHERE Username='$a'";
$query2=mysqli_query($con,$res2);
$abc=mysqli_fetch_assoc($query2);

$q=$abc['status'];
if($q=='yes')
{
	echo 'Already logged in';
}

else
{

$query1=mysqli_query($con,$res1);
$query=mysqli_query($con,$res);

if(mysqli_num_rows($query)>0)
{ 	
	
echo "h";
	$_SESSION['tuser']=$a;
	echo $_SESSION['tuser'];
header("Location:customerpage1.php");

}

else
{
	echo"Please enter valid username";
}
}
?>