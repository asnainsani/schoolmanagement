<?php
include("stu1.php");
$rollno=$_GET['rollno'];
$result=mysqli_query($mysqli,"SELECT* from details where rollno='$rollno'");
while($res=mysqli_fetch_array($result)){

	$name=$res['name'];
	$standard=$res['standard'];
	$fathername=$res['fathername'];
	$english=$res['english'];
	$html=$res['html'];
	$css=$res['css'];
	$javascript=$res['javascript'];
	$php=$res['php'];
	 $total= $english + $html + $css + $javascript + $php;
  $percent= $total * 100 / 500;
}  
?>
<?php
if(isset($_POST['update'])){

	$rollno=$_POST['rollno'];
	
	$english=$_POST['english'];
	$html=$_POST['html'];
	$css=$_POST['css'];
	$javascript=$_POST['javascript'];
	$php=$_POST['php'];
  $total= $english + $html + $css + $javascript + $php;
  $percent= $total * 100 / 500;
	$result=mysqli_query($mysqli,"update details SET name='$name',english='$english',html='$html',css='$css',javascript='$javascript' ,php='$php' where rollno=$rollno");
	if($result){
		print"UPDATED";
	}
	else{
		print "failed"; 
	}
	
}
?>
<style type="text/css">
    body {
      font-family: Arial, sans-serif;

    }
    
    .marksheet {
       background:linear-gradient(30deg,dodgerblue,white,pink);
      width: 600px;
      margin: 0 auto;
      border: 7px solid #ddd;
      padding: 20px;
    }
    
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .student-info {
      margin-bottom: 20px;
    }
    
    .student-info span {
      font-weight: bold;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;

    }
    
    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    .total {
      font-weight: bold;
    }
    .img{
      max-width: 100%;
      width: 10%;
      float: left;
      
    }
  </style>
<form method="post">
  <div class="marksheet">
     <div><img src="logo.png" class="img"></div>
    <h3><center>MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,PUNE</center></h3>
    <h2 class="header">STATEMENT OF MARKS</h2>
        <div class="student-info">
      <span>Student Name:</span> <?php print $name;?><br>
      <span>Class:</span> <?php print $standard ; ?><br>
      <span>Father Name:</span> <?php print $fathername ; ?>
    </div>
  
    <table>
      <tr>
        <th>Subject</th>
        <th>Max-Marks</th>
        <th>Marks</th>
      </tr>
      <tr>
        <td>English</td>
        <td>100</td>
       <td><input type="" name="english" value="<?php print $english ; ?>"></td>
        
      </tr>
      <tr>
        <td>Html</td>
        <td>100</td>
        <td><input type="" name="html" value="<?php print $html ; ?>"></td>
      </tr>
      <tr>
        <td>CSS</td>
        <td>100</td>
         <td><input type="" name="css" value="<?php print $css ; ?>"></td>
      </tr>
      <tr>
        <td>JavaScript</td>
        <td>100</td>
        <td><input type="" name="javascript" value="<?php print $javascript ; ?>"></td>
      </tr>
      <tr>
        <td>Php</td>
        <td>100</td>
         <td><input type="" name="php" value="<?php print $php ; ?>"></td>
      </tr>
      <tr>
        
      <tr class="total">
        <td>Total</td>
        <td>500</td>
        <td><?php print $total;?></td>
      </tr>
      <tr><td colspan="5" class="total">Percentage: <?php print $percent;?>%</td></tr>

    </table>
    <input type="hidden" name="rollno" value=<?php print $_GET['rollno'];?>>
     <center><input type="submit" name="update" value="update" class="btn"></center>  
  </div>
</form>
<a href="sani.php"><h3><center>back</center></h3></a>