<?php

session_start();
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");


$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$did=$row['docid'];
}

?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<link href="css/dapp.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="dprofile.php">MY ACCOUNT</a>
  <a href="dapp.php"style="background-color:white;color:blue;font-size:18;">VIEW APPOINTMENT</a>
  <a href="cancel.php">CANCEL APPOINTMENTS</a>
  <a href="dupdate.php">UPDATE PROFILE</a>
  <a href="dchange.php">CHANGE PASSWORD</a>
  <a href="dlogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome">
</div>
<br/>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;">VIEW YOUR APPOINTMENTS</h1>
<br/>
<br/>
<br/>
<table border="1">
<tr>
<th>S. No.</th>
<th>Patient Name</th>
<th>Father's Name</th>
<th>Gender</th>
<th>Mobile</th>
<th>E-mail Id</th>
<th>Date of Appointment</th>
</tr>
<?php
$sn=1;
$query2="select * from tbl_appointment where docid='$did'";
$res2=mysql_query($query2);
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $sn;?></td>

<?php 
$ppid=$row2['patid'];
$query3="select * from tbl_patient where patid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
	$fname=$row3['fathername'];
	$gender=$row3['gender'];
	$mobile=$row3['mobile'];
	$email=$row3['email'];
	
}
?>
<td><?php echo $pname;?></td>
<td><?php echo $fname;?></td>
<td><?php echo $gender;?></td>
<td><?php echo $mobile;?></td>
<td><?php echo $email;?></td>
<?php
$did=$row2['docid'];
$query4="select * from tbl_doctor where docid='$did'";
$res4=mysql_query($query4);
if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
	$dname=$row4['doctorname'];
}
?>
<td><?php echo $row2['doa'];?></td>
</tr>
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
</table>
</center>
</div>
</div>
</body>
</html>