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
<link href="css/pfeed.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="book.php">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php"style="background-color:white;color:blue;font-size:18;">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome"></div>
<br/>
<br/>
<br/>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-12" style="text-align:center;">
<h1 style="font-family:cooper;line-height:3;">MY FEEDBACK</h1>
<form action="pfeedcode.php" method="post">
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-4 h3">
Feedback :
</div>
<div class="col-sm-8">
<textarea name="feed" placeholder="Give Your Feedback" class="form-control"></textarea>
</div>
</div>
<br/>
<br/>
<input type="submit" value="Send" class="form-control btn btn-danger">
</form>
</div>
<div class="col-sm-3"></div>
</div>

</div>
</div>
</body>
</html>
