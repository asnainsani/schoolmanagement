<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","students");
if(!$con)
{
	print("not connected");
}
$usn=$_REQUEST['usn'];
$pass=$_REQUEST['pass'];
$rs=mysqli_query($con,"select * from details where username='$usn' and password='$pass'");
if (mysqli_num_rows($rs)>=1)
{
	include("stlog1.php");
	
}
	
else
{
	print("login fail");
}

?>
</body>
</html>