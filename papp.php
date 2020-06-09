<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['patient'];
include("connect.php");
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['patid'];
}
$query2="select * from tbl_appointment where patid='$pid'";
$res2=mysql_query($query2);

?>
<html>
<head>
<link href="css/papp.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pprofile.php">MY ACCOUNT</a>
  <a href="book.php">BOOK APPOINTMENT</a>
  <a href="papp.php"style="background-color:white;color:blue;font-size:18;">MY APPOINTMENTS</a>
  <a href="discuss.php">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<center>
<div class="row">
<div class="col-sm-3"></div>
<br/>
<br/>
<br/>
<div class="col-sm-6">
<h1 style="font-family:cooper;line-height:3;margin-left:-170px;">MY APPOINTMENTS</h1>
<br/>
<br/>
<br/>
<br/>
<table border="1" cellspacing="0px" cellpadding="5"style="margin-left:10px;">
<tr>
<th>S. No.</th>
<th>Doctor Name</th>
<th>Gender</th>
<th>Speciality</th>
<th>Mobile No.</th>
<th>E-mail Id</th>
<th>Fees</th>
<th>Address</th>
<th>Appointment Date</th>
</tr>
<?php
$sn=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $sn;?></td>
<?php $ppid=$row2['patid'];
$query3="select * from tbl_patient where patid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<?php $ddid=$row2['docid'];
$query4="select * from tbl_doctor where docid='$ddid'";
$res4=mysql_query($query4);
if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
	$dname=$row4['doctorname'];
}
?>
<td><?php echo $row4['doctorname'];?></td>
<td><?php echo $row4['gender'];?></td>
<td><?php echo $row4['speciality'];?></td>
<td><?php echo $row4['mobile'];?></td>
<td><?php echo $row4['email'];?></td>
<td><?php echo $row4['fees'];?></td>
<td><?php echo $row4['address'];?></td>
<td><?php echo $row2['doa'];?></td>
</tr>
<?php
	$sn++;
}

?>
</table>
</div>
<div class="col-sm-3"></div>
</div>
</center>
<br/>
</div>
</div>
</body>
</html>