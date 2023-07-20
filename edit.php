	<?php
include("stu1.php");
$rollno=$_GET['rollno'];
$result=mysqli_query($mysqli,"SELECT* from details where rollno='$rollno'");
while($res=mysqli_fetch_array($result)){

	$name=$res['name'];
	$libraryfees=$res['libraryfees'];
	$tutionfees=$res['tutionfees'];
	$computerfees=$res['computerfees'];
	$totalfees=$res['totalfees'];
	$remainfees=$totalfees - $libraryfees - $tutionfees - $computerfees;
	
}  
?>
<?php
if(isset($_POST['update'])){

	$rollno=$_POST['rollno'];
	$libraryfees=$_POST['libraryfees'];
	$tutionfees=$_POST['tutionfees'];
	$computerfees=$_POST['computerfees'];
	$totalfees=$_POST['totalfees'];
	$remainfees=$totalfees - $libraryfees - $tutionfees - $computerfees;
	$result=mysqli_query($mysqli,"update details SET name='$name',libraryfees='$libraryfees',tutionfees='$tutionfees',computerfees='$computerfees',totalfees='$totalfees',remainfees='$remainfees' where rollno=$rollno");
	if($result){
		header("location:sani.php");
	}
	else{
		print "failed"; 
	}
	
}
?>
<style type="text/css">
	input{
		border-radius: 5px;
		font-size: 15px;
		border:1px solid;
		display: block;
	
	}
	form{
		font-weight: bold;
	}
</style>
<form action="" method="POST">
	Name<input type="text" name="name" value="<?php print $name ; ?>" readonly><br>
	Library Fees<input type="text" name="libraryfees" value="<?php print $libraryfees ; ?>"><br>
	Tution Fees<input type="text" name="tutionfees" value="<?php print $tutionfees ; ?>"><br>
	Computer Fees<input type="text" name="computerfees" value="<?php print $computerfees ; ?>"><br>
	Total Fees<input type="text" name="totalfees" value="<?php print $totalfees ; ?>" readonly><br>
	Remain Fees<input type="text" name="remainfees" value="<?php print $remainfees ; ?>" readonly><br>
	<input type="hidden" name="rollno" value=<?php print $_GET['rollno'];?>>
	<input type="submit" name="update" value="update">


</form>
<a href="sani.php" ><h3>Back</h3></a>