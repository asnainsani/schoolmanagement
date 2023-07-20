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
	<table width=60% border="NO">

<?php
	$con=mysqli_connect("localhost","root","","students");

	if(!$con)
	{
		print("not connected");
	}
	$rs=mysqli_query($con,"select * from details where password='$password'");
	while($row=mysqli_fetch_array($rs)){
	
?>

	<tr>
<th colspan="5" style="font-size: 27px;">AIMS INSTITUTE, Akola</th></tr><td style="font-size: 19px; ">UDISE NO :12345678<br> Medium : English <br>College Reg No : 12222/9</td>
</tr>
<tr><th>LEAVING CERTIFICATE</th></tr>
<tr align="left">
<td colspan="5" style="font-size: 21px; font-weight: bold;"><pre>Name : <?php print($row['name']);?><br>
Father Name : <?php print($row['fathername']);?><br>
Nationality : <?php print($row['nationality']);?><br>
Mother Tounge : <?php print($row['mothertounge']);?><br>
Place Of Birth : <?php print($row['birth']);?><br>
State : <?php print($row['state']);?><br>
Date Of Leaving : <?php print($row['leaving']);?><br></pre>
<tr><th colspan="5"><button onclick="window.print();"class="btn btn-primary" >Print</button></th></tr>


</td>
</tr>

<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>