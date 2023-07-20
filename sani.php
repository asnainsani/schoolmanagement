<?php
include("stu1.php");
$result=mysqli_query($mysqli,"SELECT* from details ORDER BY rollno ");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-size: 20px;"><center>
<table width=70%  border="2">
	<tr  height="40">
<th>Name</th>
<th>Library fees</th>
<th>Tution fees</th>
<th>Computer fees</th>
<th>Total fees</th>
<th>Remain fees</th>
<th>Clear Dues</th>	
<th>Marksheet</th>
<th>TC</th>	
	</tr>

<?php
while($res=mysqli_fetch_array($result)){

	print '<tr align="center" height="30">';
	print'<td>' .$res['name'].'</td>';
	print'<td>' .$res['libraryfees'].'</td>';
	print'<td>' .$res['tutionfees'].'</td>';
	print'<td>' .$res['computerfees'].'</td>';
	print'<td>' .$res['totalfees'].'</td>';
	print'<td>' .$res['remainfees'].'</td>';
	print "<td><a href=\"edit.php?rollno=$res[rollno]\"><input type='submit' value='clear'></a>";
	print "<td><a href=\"shmark.php?rollno=$res[rollno]\"><input type='submit' value='edit'></a>";
	print "<td><a href=\"tcupd.php?rollno=$res[rollno]\"><input type='submit' value='edit'></a>";
		print'</tr>';


}


?>
</table><br><a href="index.html" style=""><center>LogOut</a></center>
</body>

</html>