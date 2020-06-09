<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select distinct speciality from tbl_doctor";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/pbook.css" rel="stylesheet" type="text/css"/>
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
<div class="content" style="background-image:url('images/jesus-kiteque-wn-KYaHwcis-unsplash.jpg');background-size:100% 100%;">
<div id="outer">

<div id="welcome"></div>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;line-height:3;" >BOOK APPOINTMENT</h1></center>
<br/>
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-6">
<form action="book.php" method="post">
<select name="spc" class="form-control">
<option value="">--Select Speciality--</option>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option><?php echo $row['speciality']; ?></option>
<?php
}
?>
</select>
</div>
<div class="col-sm-2">
<input type="submit" value="Search Doctor" class="form-control btn btn-danger" style=""/>
<div class="col-sm-2"></div>
</div>
</form>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
</div>
</div>
</body>
</html>