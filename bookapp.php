<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");

$did=$_REQUEST['did'];
//echo $did;

$query="select * from tbl_doctor  where docid='$did'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>	
<html>
<head>
<link href="css/bookapp.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
<a href="pprofile.php">MY ACCOUNT</a>
  <a href="book.php"style="background-color:white;color:blue;font-size:18;">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
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
<center><h1 style="font-family:cooper;line-height:3;" >BOOK APPOINTMENT</h1></center>
<div id="pic">
<img src="doctor/dphoto/<?php echo $row['photo'];?>" height="170px" width="150px" style="border-radius:30px;"/>
</div>

<form action="booknow.php" method="post">

<input type="hidden" name="did" value="<?php echo $row['docid'];?>"/>
<div class="row">
<div class="col-sm-6"></div>
<div class="col-sm-2 h4 ">
Doctor Name :
</div>
<div class="col-sm-3">
<input type="text" name="name" class="form-control" readonly value="<?php echo $row['doctorname'];?>">
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row">
<div class="col-sm-6"></div>
<div class="col-sm-2 h4 ">
Email :
</div>
<div class="col-sm-3">
<input type="email" name="email" class="form-control" readonly value="<?php echo $row['email'];?>">
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row">
<div class="col-sm-6"></div>
<div class="col-sm-2 h4 ">
Appointment Date : 
</div>
<div class="col-sm-3">
<input type="date" name="date" class="form-control">
<br/>
<input type="submit" value="Book Now" class="form-control" style="background-color:red;color:white;">
</div>
<div class="col-sm-1"></div>
</div>
</form>	
<?php
}
?>
</div>
<body>
</html>