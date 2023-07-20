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
$password=$_REQUEST['password'];
$rs=mysqli_query($con,"select * from details where password='$password' ");
if (mysqli_num_rows($rs)>=1)
{
	include("sss.php");
	
}
	
else
{
	print("login fail");
}

?>
</body>
</html>