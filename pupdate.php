<?php
session_start();
//echo 
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
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/patvalid.js"></script>
<link href="css/pupdate.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pprofile.php">MY ACCOUNT</a>
  <a href="papp.php">VIEW APPOINTMENT</a>
  <a href="cancel.php">CANCEL APPOINTMENTS</a>
  <a href="pupdate.php"style="background-color:white;color:blue;font-size:18;">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content" style="background-color:rgba(255,255,0,0.2);">
<div id="outer">
<div id="welcome">
</div>
<br/>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;">UPDATE YOUR PROFILE</h1></center>
<br/>
<form action="pupdatecode.php" method="post"  enctype="multipart/form-data">
<input type="hidden" name="patid" value="<?php echo $row['patid'] ?>"/>
<div class="row ">
<div class="col-sm-2"></div>
<div class="col-sm-8 h4 panel" style="background-color:#64B5F6;">
<br/>
<div class="row ">

<div class="col-sm-3">
<br/>
NAME :
<hr/>
</div>
<div class="col-sm-9">
	
<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['name'];?>" onblur="checkNameField(this)" id="name" class="form-control"/>
<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
FATHER'S NAME :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" name="fname" value="<?php echo $row['fathername'];?>" placeholder="Enter Father's Name" id="fname" onblur="checkNameField(this)" class="form-control"/>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">

GENDER :
<hr/>
</div>
<div class="col-sm-4">
<input type="radio" name="a" value="Male"   <?php if($row['gender']=='male'){ ?> checked 	<?php } ?>/>&nbsp; Male
<hr/>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4">
<input type="radio" name="a" value="Female"  <?php if($row['gender']=='female'){ ?> checked 	<?php } ?> />&nbsp; Female
<hr/>
</div>

</div>

<div class="row ">
<div class="col-sm-3">
<br/>
MOBILE :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" name="mobile" placeholder="Enter Mobile Number" value="<?php echo $row['mobile'];?>" onblur="checkMobileNumber(this)" maxlength="10" class="form-control"/>
<hr/>
</div>
</div>

<div class="row ">
<div class="col-sm-3">
<br/>
AGE :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" name="age" value="<?php echo $row['age'];?>" placeholder="Enter Your Age(in years)" maxlength="3" onblur="checkAgeField(this)" class="form-control"/>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
PINCODE :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" value="<?php echo $row['pincode'];?>" name="time" placeholder="Enter Your Pincode" class="form-control"/>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
ADDRESS :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" name="address" value="<?php echo $row['address'];?>" placeholder="Enter Your Timing" class="form-control"/>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
PHOTO :
<hr/>
</div>
<div class="col-sm-9">
<input type="file" name="file" class="form-control" onchange="FileUpload(this)" value="<?echo $row['filename'];?>" />
<hr/>
</div>
</div>
<div class="row">
 
<div class="col-sm-5"> </div>
<div class="col-sm-2">
<input type="submit" value="UPDATE" class="form-control btn btn-danger"  />

</div>
<div class="col-sm-5"></div>
 
 
</div>
</div>
</form>
<?php
}
?>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</div>
</body>
</html>
