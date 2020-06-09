<?php
session_start();
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
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
<link rel="stylesheet" type="text/css" href="css/dchange.css"/> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="dprofile.php">YOUR ACCOUNT</a>
  <a href="dapp.php">VIEW APPOINTMENT</a>
  <a href="cancel.php">CANCEL APPOINTMENTS</a>
  <a href="dupdate.php">UPDATE PROFILE</a>
  <a href="dchange.php"style="background-color:white;color:blue;font-size:18;">CHANGE PASSWORD</a>
  <a href="dlogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="welcome"></div>
<br/>
<div class="row">
<div class="col-sm-12 h1" style="text-align:center;">
<center><h1 style="font-family:cooper;line-height:3;">Change Your Current Password</h1></center>



</div>

</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6 panel">
<br/>
<br/>
<form action="dchangecode.php" method="post">
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
<input type="submit" value="Change Password" id="ab" class="form-control"/>
<div class="col-sm-4"></div>
</div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>
