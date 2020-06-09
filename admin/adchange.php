<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
?>
<html>
<head>
<link href="css/adchange.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
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
  <a href="viewapp.php">VIEW APPOINTMENTS</a>
  <a href="adchange.php" style="background-color:white;color:blue;font-size:18px;">CHANGE PASSWORD</a>
  <a href="adlogout.php">LOGOUT</a>
</div>
<!-- Page content -->
<div class="content">
<div id="outer" style="background-image:url('images/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg');background-size:100% 100%;">
<div id="welcome"></div>
<br/>
<center><h1 style="font-family:cooper;">Change Your Current Password</h1></center>
<center>
<div id="center">
<table><form action="adchangecode.php" method="post">
<br/>
<br/>
<br/>
<br/>
<table>
<tr>
<td>
OLD PASSWORD :
</td>
<td>
<input type="text" name="op" placeholder="Enter Your Current Password" class="formcontrol"/>
</td>
</tr>
</table>
<br/>
<table>
<tr>
<td>
NEW PASSWORD :
</td>
<td>
<input type="password" name="password" id="password"  placeholder="Enter Your New Password" class="formcontrol"/>
</td>
</tr>
</table>
<br/>
<table  style="margin-left:-40px;">
<tr>
<td>
CONFIRM PASSWORD :
</td>
<td>
<input type="password" name="password" id="password"  placeholder="Re-enter Your New Password" class="formcontrol"/>
</td>
</tr>
</table>
<br/>
<br/>
<table>
<tr>
<td>
</td>
<td>
<input type="submit" value="CHANGE PASSWORD"  class="formcontrol" style="background-color:#2196f3;color:white;margin-right:-150px;"/>
</td>
</tr>
</table>
</form>
</table>
</div>
</center>
</div>
</div>
</body>
</html>