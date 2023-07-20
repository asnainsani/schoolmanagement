<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con)
{
	print("not connected");
}
$un=$_REQUEST['un'];
$pwd=$_REQUEST['pwd'];
$rs=mysqli_query($con,"select * from profile where username='$un' and password='$pwd'");
if(mysqli_num_rows($rs)>=1)
{
	include("sani.php");
}
else
{
	print("login fail");
}
?>

</body>
</html>