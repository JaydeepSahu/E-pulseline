<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/> 
<link rel="stylesheet" type="text/css" href="css/pchange.css"/> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pprofile.php">MY ACCOUNT</a>
  <a href="book.php">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php"style="background-color:white;color:blue;font-size:18;">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="welcome"></div>
<div id="outer" style"background-color:rgba(255,255,0,0.2);">
<div class="row">
<div class="col-sm-12 h1" style="text-align:center;">
<center><h1 style="font-family:cooper;line-height:3;">Change Your Current Password</h1></center>



</div>

</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<br/>
<br/>
<form action="pchangecode.php" method="post">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h4">
Old Password:
</div>
<div class="col-sm-6">
<input type="password" name="op" placeholder="Enter Your Current Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h4">
New Password:
</div>
<div class="col-sm-6">
<input type="password" name="np" placeholder="Enter Your New Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h4">
Confirm Password:
</div>
<div class="col-sm-6">

<input type="password" name="cp" placeholder="Re-enter Your New Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="submit" value="Change Password" id="ab" class="form-control btn btn-danger"/>
<div class="col-sm-4"></div>
</div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</div>
</body>
</html>
