<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_comment";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/viewcomment.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="viewdoc.php">VIEW DOCTORS</a>
  <a href="viewpat.php">VIEW PATIENTS</a>
  <a href="viewcomment.php" style="background-color:white;color:blue;font-size:18px;">VIEW GENERAL COMMENTS</</a>
  <a href="viewcon.php">VIEW CONTACTS</</a>
  <a href="viewdis.php">VIEW DISCUSSION BOARD</a>
  <a href="viewfeed.php">VIEW FEEDBACK</a>
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
<center><h1 style="font-family:cooper;">VIEW ALL GENERAL COMMENTS HERE</h1>
<br/>
<table>
<tr>
<th>S. No.</th>
<th>NAME</th>
<th>Email</th>
<th>MOBILE</th>
<th>COMMENTS</th>
</tr>
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

<tr>
<td><?php echo $sn; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['comment']; ?></td>
</tr>


<?php
$sn++;
}
?>
</table>
</center>
</div>
</div>
</body>
</html>