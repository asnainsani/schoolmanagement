<?php
include("stu1.php");

?>

<form action="" method="POST">
	Name<input type="text" name="name"><br>
	Library Fees<input type="text" name="libraryfees"><br>
	Tution Fees<input type="text" name="tutionfees"><br>
	Computer Fees<input type="text" name="computerfees"><br>
	Total Fees<input type="text" name="totalfees"><br>
	Remain Fees<input type="text" name="remainfees"><br>
	<input type="submit" name="submit">


</form>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$libraryfees=$_POST['libraryfees'];
	$tutionfees=$_POST['tutionfees'];
	$computerfees=$_POST['computerfees'];
	$totalfees=$_POST['totalfees'];
	$remainfees=$_POST['remainfees'];
	$result=mysqli_query($mysqli,"insert into details values('','$name','$libraryfees','$tutionfees','$computerfees','$totalfees','$remainfees')");
	if($result)
	{
		print"sucess";
	}
	else{
		print"failed";
	}
}


?>