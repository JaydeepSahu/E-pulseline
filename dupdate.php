<?php
session_start();
//echo 
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['doctor'];
include("connect.php");
$query="select * from tbl_doctor where email='$email'";
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
<script src="js/dupdate.js"></script>
<link href="css/dupdate.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="dprofile.php">MY ACCOUNT</a>
  <a href="dapp.php">VIEW APPOINTMENT</a>
  <a href="cancel.php">CANCEL APPOINTMENTS</a>
  <a href="dupdate.php"style="background-color:white;color:blue;font-size:18;">UPDATE PROFILE</a>
  <a href="dchange.php">CHANGE PASSWORD</a>
  <a href="dlogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome">
</div>
<br/>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;">UPDATE YOUR PROFILE</h1></center>
<br/>
<form action="dupdatecode.php" method="post"  enctype="multipart/form-data">
<input type="hidden" name="docid" value="<?php echo $row['docid'] ?>"/>
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
	
<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['doctorname'];?>" onblur="checkNameField(this)" id="name" class="form-control"/>
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
<br/>
GENDER :
<hr/>
</div>
<div class="col-sm-4">
<br/>
<input type="radio" name="a" value="male" <?php if($row['gender']=='Male'){ ?> checked 	<?php } ?> />&nbsp; Male


<hr/>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4">
<br/>
<input type="radio" name="a" value="female"  />&nbsp; Female


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
SPECIALITY :
<hr/>
</div>
<div class="col-sm-9">
<select name="speciality"  class="form-control">
<option><?php echo $row['speciality'];?></option>
<option>SURGEON</option>
<option>TRAUMATOLOGIST</option>
<option>CARDIOLOGIST</option>
<option>OPHTHALMOLOGIST</option>
<option>NEUROLOGIST</option>
<option>NEURO SURGEON</option>
<option>DENTIST</option>
<option>PHYSICIAN</option>
<option>EYE SPECIALIST</option>
<option>PATHOLOGIST</option>
<option>ORTHOPHYSICIAN</option>
<option>PEDIATRICIAN</option>
</select>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
FEE :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" name="fees" value="<?php echo $row['fees'];?>" placeholder="Enter Your Fees(in rupees)" maxlength="8" onblur="checkFeesField(this)" class="form-control"/>

<hr/>

</div>
</div>
<div class="row ">
<div class="col-sm-3">
<br/>
TIMING :
<hr/>
</div>
<div class="col-sm-9">
<input type="text" value="<?php echo $row['timing'];?>" name="time" placeholder="Enter Your Timing" class="form-control"/>

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
<input type="file" name="file" class="form-control" value="<?php echo $row['photo'];?>" onchange="FileUpload(this)"/>
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
<br/>
<br/>
<br/>
</div>
</div>
</div>
</body>
</html>