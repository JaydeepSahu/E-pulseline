<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_appointment";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/viewapp.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="viewdoc.php">VIEW DOCTORS</a>
  <a href="viewpat.php">VIEW PATIENTS</a>
  <a href="viewcomment.php">VIEW GENERAL COMMENTS</a>
  <a href="viewcon.php">VIEW CONTACTS</a>
  <a href="viewdis.php">VIEW DISCUSSION BOARD</a>
  <a href="viewfeed.php">VIEW FEEDBACK</a>
  <a href="viewapp.php" style="background-color:white;color:blue;font-size:18px;">VIEW APPOINTMENTS</a>
  <a href="adchange.php">CHANGE PASSWORD</a>
  <a href="adlogout.php">LOGOUT</a>
</div>
<!-- Page content -->
<div class="content">
<div id="outer" style="background-image:url('images/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg');background-size:100% 100%;position:fixed;">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<br/>
<h1 style="font-family:cooper;margin-left:280px;">VIEW ALL APPOINTMENTS HERE</h1>
<br/>
<table align="center">
<tr>
<th>S. No.</th>
<th>PATIENT'S NAME</th>
<th>DOCTOR'S NAME</th>
<th>DATE OF APPOINTMENT</th>
<th>STATUS</th>
</tr>
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

<tr>
<td><?php echo $sn; ?></td>
<?php 
$pid=$row['patid']; 

$query2="select * from tbl_patient where patid='$pid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$pname=$row2['name'];
}
?>
<td><?php echo $pname; ?></td>
<?php 
$did=$row['docid']; 
$query3="select * from tbl_doctor where docid='$did'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$dname=$row3['doctorname'];
}
?>
<td><?php echo $dname; ?></td>
<td><?php echo $row['doa']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php
$sn++;
}
?>
</div>
</div>
</body>
</html>