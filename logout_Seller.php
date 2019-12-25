<?php
session_start();
$x=$_SESSION['tuser'];
echo $x;

include("connect.php");


$sql1="update status_login set status = 'no' where Username= '$x'";
mysqli_query($con,$sql1) or die("not executed");

session_unset();
session_destroy();
?>





 