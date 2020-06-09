<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/viewfeed.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="viewdoc.php">VIEW DOCTORS</a>
  <a href="viewpat.php">VIEW PATIENTS</a>
  <a href="viewcon.php">VIEW CONTACTS</a>
  <a href="viewdis.php">VIEW DISCUSSION BOARD</a>
  <a href="viewfeed.php" style="background-color:white;color:blue;font-size:18px;">VIEW FEEDBACKS</a>
  <a href="viewapp.php">VIEW APPOINTMENTS</a>
  <a href="adchange.php">CHANGE PASSWORD</a>
  <a href="adlogout.php">LOGOUT</a>
</div>
<!-- Page content -->
<div class="content">
<div id="outer" style="background-image:url('images/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg');background-size:100% 100%;">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;">VIEW ALL FEEDBACKS HERE</h1>
<br/>
<table>
<tr>
<th>S. No.</th>
<th>PATIENT NAME</th>
<th>FEEDBACK</th>
<th>TIME</th>
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
$row2=mysql_fetch_array($res2,MYSQL_BOTH)
 ?>
<td><?php echo $row2['name']; ?></td>
<td><?php echo $row['feedback']; ?></td>
<td><?php echo $row['datetime']; ?></td>
</tr>


<?php
$sn++;
}
?>
</table>
</center>
</body>
</html>
</div>
</div>
</body>
</html>