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
  <?php
  $con=mysqli_connect("localhost","root","","students");

  if(!$con)
  {
    print("not connected");
  }
  $rs=mysqli_query($con,"select * from details where password='$password'");
  while($row=mysqli_fetch_array($rs)){
  
?>
  <div class="certificate">
    <div><img src="logo.png" class="img"></div> 
    <center><h2>AIMS INSTITUTE, Akola</h2>
    <h3>Leaving Certificate</h3></center>
    <strong>Medium</strong> : English  <br><br> <strong>UDISE NO</strong> :12345678  <strong>College Reg No</strong> : 12222/9<br>
  <br>
    <div class="info"><br>
      <p><strong >Name:</strong> <?php print($row['name']);?></p><br>
      <p><strong>Place of Birth:</strong> <?php print($row['birth']);?></p><br>
      <p><strong>Father Name:</strong> <?php print($row['fathername']);?></p><br>
     <p><strong>Nationality:</strong> <?php print($row['nationality']);?></p><br>
     <p><strong>Mother Tounge:</strong> <?php print($row['mothertounge']);?></p><br>
    <p><strong>State:</strong> <?php print($row['state']);?></p>
    </div>
    <div class="details">
      <p><strong>Date of Leaving:</strong> <?php print($row['leavindc']);?></p><br>
      <p><strong>Course Completed:</strong><?php print($row['standard']);?></p><br>
      <p><strong>Duration:</strong> 3 years</p>
    </div>
    <div class="performance">
      <p><strong>Academic Performance:</strong><?php print($row['grade']);?></p><br>
    </div>
     <div class="signature" ><br><br>
      <p><strong style="left;">Principal's Signature:</strong> ________</p>
    </div>
    <div class="seal" >
      <p><strong >Official Seal:</strong> ________</p>
    </div>
  </div>
<center><button onclick="window.print();"class="btn btn-primary" >Print</button></center>
  <?php
}
mysqli_close($con);
?>
<br>
<a href="index.html" style=""><center>LogOut</a></center>
</body>
</html>


