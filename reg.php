<?php 
include("stu1.php");

?>

Registration form
<form name="frm" action="" method="post">
	username-<input type="text" name="username"><br>
	password-<input type="text" name="password"><br>
	Name-<input type="text" name="name"><br>
	Roll No-<input type="text" name="rollno"><br>
	fathername-<input type="text" name="fathername"><br>
	
	<input type="submit" name="submit" value="signup">
</form>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$rollno=$_POST['rollno'];
	$fathername=$_POST['fathername'];
	
	$result=mysqli_query($mysqli,"insert into details values('$name','$username','$password','$rollno','$fathername')");
	if($result)
	{
		print"sucess";
	}
	else{
		print"sucess";
	}
}


?>