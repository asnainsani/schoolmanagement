<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body{
		font-size: 22px;
	}
	td{
		text-align: center;
	}
</style>
</head>
<body>
	<table width=60% border="2">

<?php
	$con=mysqli_connect("localhost","root","","students");

	if(!$con)
	{
		print("not connected");
	}
	$rs=mysqli_query($con,"select * from details where password='$password'");
	while($row=mysqli_fetch_array($rs))
{
	$english=$row['english'];
	$html=$row['html'];
	$css=$row['css'];
	$javascript=$row['javascript'];
	$php=$row['php'];
	$total= $english + $html + $css + $javascript + $php;
	$percent= $total * 100 / 500;
?>


<tr>
<th colspan="5">AIMS INSTITUTE </th>
</tr>
<tr align="left">
<th colspan="5">Name : <?php print($row['name']);?><pre>Class : <?php print($row['standard']);?></th></pre>
</tr>
<tr>
	<th colspan="2">Subjects</th>
	<th colspan="1">M-Marks</th>
	<th colspan="1">Obtained Marks</th>
</tr>
	<td colspan="2">English <td>100</td><td> <?php print($row['english']);?></td></td>
</tr>
	<td colspan="2">Html <td>100</td><td> <?php print($row['html']);?></td></td>
</tr>
<tr><td colspan="2">CSS <td>100</td><td> <?php print($row['css']);?></td></td></tr>
<tr><td colspan="2">JavaScript <td>100</td><td> <?php print($row['javascript']);?></td></td></tr>
<tr><td colspan="2">Php <td>100</td><td> <?php print($row['php']);?></td></td></tr>
<tr> <th colspan="2">Total Marks</th><th>500</th><th><?php print $total;?> </th></tr>
<tr><th colspan="5">Percentage : <?php print $percent;?>%</th></tr>
<tr><th colspan="5"><button onclick="window.print();"class="btn btn-primary" >Print</button></th></tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>