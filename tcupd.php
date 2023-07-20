<?php
include("stu1.php");
$rollno=$_GET['rollno'];
$result=mysqli_query($mysqli,"SELECT* from details where rollno='$rollno'");
while($res=mysqli_fetch_array($result)){

	$name=$res['name'];
	$standard=$res['standard'];
	$fathername=$res['fathername'];
	$nationality=$res['nationality'];
	$mothertounge=$res['mothertounge'];
	$birth=$res['birth'];
	$state=$res['state'];
	$leavindc=$res['leavindc'];	
	$grade=$res['grade'];
	
}  
?>
<?php
if(isset($_POST['update'])){

	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$standard=$_POST['standard'];
	$fathername=$_POST['fathername'];
	$nationality=$_POST['nationality'];
	$mothertounge=$_POST['mothertounge'];
	$birth=$_POST['birth'];
	$state=$_POST['state'];
	$leavindc=$_POST['leavindc'];
	$grade=$_POST['grade'];
	$result=mysqli_query($mysqli,"update details SET name='$name',fathername='$fathername',nationality='$nationality',standard='$standard' ,mothertounge='$mothertounge' ,birth='$birth' ,state='$state', leavindc='$leavindc',grade='$grade' where rollno=$rollno");
	if($result){
		print "Updated";
	}
	else{
		print "failed"; 
	}
	
}
?>
</style>
<!DOCTYPE html>
<html>
<head>
  <title>Leaving Certificate</title>
  </head>
<style type="text/css">

  body {

  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 20px;
}

.certificate {
   max-width: 600px;
  margin: 0 auto;
  background-color: #dbf9db;;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
}

.info, .details, .performance, .conduct, .signature, .seal {
  margin-bottom: 15px;
}

.info p, .details p, .performance p, .conduct p, .signature p, .seal p {
  margin: 0;
}

.strong {
  font-weight: bold;
}
.info{
  border-top: 2px solid black;
}
.img{
      max-width: 100%;
      width: 10%;
      float: left;
      
    }
    
</style>

<body>
	<form method="post">
   <div class="certificate">
    <div><img src="logo.png" class="img"></div> 
    <center><h2>AIMS INSTITUTE, Akola</h2>
    <h3>Leaving Certificate</h3></center>
    <strong>Medium</strong> : English  <br><br> <strong>UDISE NO</strong> :12345678  <strong>College Reg No</strong> : 12222/9<br>
  <br>
    <div class="info"><br>
      <p><strong >Name:</strong> <input type="" name="name" value="<?php print $name ; ?>"></p><br>
      <p><strong>Place of Birth:</strong> <input type="" name="birth" value="<?php print $birth ; ?>"></p><br>
      <p><strong>Father Name:</strong> <input type="" name="fathername" value="<?php print $fathername ; ?>" ></p><br>
     <p><strong>Nationality:</strong> <input type="" name="nationality" value="<?php print $nationality ; ?>"></p><br>
     <p><strong>Mother Tounge:</strong> <input type="" name="mothertounge" value="<?php print $mothertounge ; ?>"></p><br>
    <p><strong>State:</strong><input type="" name="state" value="<?php print $state ; ?>"></p>
    </div>
    <div class="details">
      <p><strong>Date of Leaving:</strong> <input type="" name="leavindc" value="<?php print $leavindc ; ?>"></p><br>
      <p><strong>Course Completed:</strong> <input type="" name="standard" value="<?php print $standard ; ?>"></p><br>
      <p><strong>Duration:</strong> 3 years</p>
    </div>
    <div class="performance">
      <p><strong>Academic Performance:</strong><input type="" name="grade" value="<?php print $grade ; ?>"></p><br>
    </div>
     <div class="signature" ><br><br>
      <p><strong style="left;">Principal's Signature:</strong> ________</p>
    </div>
    <div class="seal" >
      <p><strong >Official Seal:</strong> ________</p>
    </div>
  </div>
  <input type="hidden" name="rollno" value=<?php print $_GET['rollno'];?>>
<center><input type="submit" name="update" value="update" class="btn"></center>

<br>
<a href="sani.php" style=""><center>Back</a></center>
</body>
</html>


