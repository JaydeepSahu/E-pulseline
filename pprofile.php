<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<link href="css/pprofile.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 

<script src="js/pprofile.js"></script>
</head>
<body>

<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pbook.php">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>


<!-- Page content -->
<div class="content">

<div id="outer">
<center>
<div id="welcome">
</div>

<div id="home2"></div>
<div id="home" style="background-image:url('images/sime-basioli-BRkikoNP0KQ-unsplash.jpg');">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center><span>HELLO <?php echo $row['name'];?>!</span></center>
</div>
<div id="dp"><img src="patient/pphoto/<?php echo $row['photo'];?>" height="200px" width="200px" style="border-radius:100px;"/></div>

<div id=" ">
<center><h1 style="font-family:cooper;line-height:3;">PERSONAL ACCOUNT DETAILS</h1></center>
<br/>
<div class="row ">
<div class="col-sm-2"></div>
<div class="col-sm-8 h4 panel" style="background-color:#64B5F6;">
<br/>
<div class="row">
<div class="col-sm-3">
NAME :
  <hr/>
</div>
<div class="col-sm-9">
<?php	
echo $row['name'];
?>
<hr/>
</div>
<hr/>
</div>
<div class="row ">
<div class="col-sm-3">
FATHER'S NAME :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['fathername'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
GENDER :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['gender'];
echo "<hr/>";
?></div>
</div>
<div class="row ">
<div class="col-sm-3">
MOBILE :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['mobile'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
E-MAIL :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['email'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
AGE :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['age'];
echo "<hr/>";
?>
</div>
</div>

<div class="row ">
<div class="col-sm-3">
ADDRESS :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['address'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
PINCODE :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['pincode'];
echo "<hr/>";
?>
</div>
</div>
<?php
}
?>
</div>
<div class="col-sm-2"></div>
</div>
</div>
</div>
</div>
</body>
</html>