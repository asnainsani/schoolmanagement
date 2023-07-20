<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body{
		font-size: 22px;
	}
</style>
</head>
<body>
	<center>
	<table width=60% border="2">

<?php
	$con=mysqli_connect("localhost","root","","students");

	if(!$con)
	{
		print("not connected");
	}
	$rs=mysqli_query($con,"select * from details where username='$usn' and password='$pass'");
?>
<tr>
<th>Name</th>
<th>Library fees</th>
<th>Tution fees</th>
<th>Computer fees</th>
<th>Total fees</th>
<th>Remain fees</th>
<th>Marksheet</th>
<th>T.C</th>
</tr>
<?php
while($row=mysqli_fetch_array($rs))
{
?>
<tr align="center">
<td><?php print($row['name']);?></td>
<td><?php print($row['libraryfees']);?></td>
<td><?php print($row['tutionfees']);?></td>
<td><?php print($row['computerfees']);?></td>
<td><?php print($row['totalfees']);?></td>
<td><?php print($row['remainfees']);?></td>
<td><a href="mark1.php">Print</a></td>
<td><a href="mark4.php">Print</a></td>
</tr>


<?php
}
mysqli_close($con);
?>
</table><br>
<a href="index.html" style=""><center>LogOut</a></center>
</body>
</html>