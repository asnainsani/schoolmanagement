<!DOCTYPE html>
<html>
<head>
  <title>Mark Sheet</title>
  <style>

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
</head>
<body>
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
  <div class="marksheet">
   <div><img src="logo.png" class="img"></div> 
    <h3><center>MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,PUNE</center></h3>
    
    <h2 class="header">STATEMENT OF MARKS</h2>
        <div class="student-info">
      <span>Student Name:</span> <?php print($row['name']);?><br>
      <span>Class:</span> <?php print($row['standard']);?><br>
      <span>Roll No:</span> <?php print($row['rollno']);?><br>
      <span>Father Name:</span> <?php print($row['fathername']);?>
    </div>
  
    <table>
      <tr>
        <th>Subject</th>
        <th>Max-Marks</th>
        <th>Marks</th>
      </tr>
      <tr>
        <td>English</td>
        <td>80</td>
        <td><?php print($row['english']);?></td>
      </tr>
      <tr>
        <td>Html</td>
        <td>75</td>
        <td><?php print($row['html']);?></td>
      </tr>
      <tr>
        <td>CSS</td>
        <td>85</td>
        <td><?php print($row['css']);?></td>
      </tr>
      <tr>
        <td>JavaScript</td>
        <td>90</td>
        <td><?php print($row['javascript']);?></td>
      </tr>
      <tr>
        <td>Php</td>
        <td>95</td>
        <td><?php print($row['php']);?></td>
      </tr>
      <tr>
        
      <tr class="total">
        <td>Total</td>
        <td>500</td>
        <td><?php print $total;?></td>
      </tr>
      <tr><td colspan="5" class="total">Percentage: <?php print $percent;?>%</td></tr>
    </table>
    <center><tr><th colspan="5" ><button onclick="window.print();"class="btn btn-primary" >Print</button></th></tr></center>
  </div>

  <?php
}
mysqli_close($con);
?>
<br>
<a href="index.html" style=""><center>LogOut</a></center>
</body>
</html>