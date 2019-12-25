<?php
$conn = mysqli_connect('localhost', 'root','' );
if(!$conn) {
    die('can not connect:'. mysqli_error());
}
else
{
  header("Location:records.php");
}
if(!mysqli_select_db($conn,'bill_manager')) {
    die('cannot select db: '.mysqli_error());
}



  $name = $_POST['user1'];
  $quantity = $_POST['quantity1'];
  $date = $_POST['date'];
  $name1 = $_POST['user2'];
  $quantity1 = $_POST['quantity2'];
  $date1 = $_POST['date2'];
  $name2 = $_POST['user3'];
  $quantity2 = $_POST['quantity3'];
  $date2 = $_POST['date3'];
  $name3 = $_POST['user4'];
  $quantity3 = $_POST['quantity4'];
  $date3 = $_POST['date4'];
  $name4 = $_POST['user5'];
  $quantity4 = $_POST['quantity5'];
  $date4 = $_POST['date5'];

$sn="localhost";
$un="root";
$ps="";
$db="bill_manager";

$con=mysqli_connect($sn,$un,$ps,$db);
if(!$con)
{
  die("Failed to connect".mysqli_connect_error());
}

$sql="INSERT INTO records VALUES('','$name','$quantity','$date')";
$sql1="INSERT INTO records VALUES('','$name1','$quantity1','$date1')";
$sql2="INSERT INTO records VALUES('','$name2','$quantity2','$date2')";
$sql3="INSERT INTO records VALUES('','$name3','$quantity3','$date3')";
$sql4="INSERT INTO records VALUES('','$name4','$quantity4','$date4')";
$query=mysqli_query($con,$sql);
if(!$query)
{
  die("Failed");
}
$query1=mysqli_query($con,$sql1);
if(!$query1)
{
  die("Failed");
}
$query2=mysqli_query($con,$sql2);
if(!$query2)
{
  die("Failed");
}
$query3=mysqli_query($con,$sql3);
if(!$query3)
{
  die("Failed");
}
$query4=mysqli_query($con,$sql4);
if(!$query4)
{
  die("Failed");
}
?>

