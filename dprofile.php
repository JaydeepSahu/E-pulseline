<?php
session_start();
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
<link href="css/dprofile.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="dapp.php">VIEW APPOINTMENT</a>
  <a href="cancel.php">CANCEL APPOINTMENTS</a>
  <a href="dupdate.php">UPDATE PROFILE</a>
  <a href="dchange.php">CHANGE PASSWORD</a>
  <a href="dlogout.php">LOGOUT</a>
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
<center><span>HELLO <?php echo $row['doctorname'];?>!</span></center>
</div>
<div id="dp"><img src="doctor/dphoto/<?php echo $row['photo'];?>" height="200px" width="200px" style="border-radius:100px;"/></div>

<div id="drofile">
<center><h1 style="font-family:cooper;line-height:3;">PERSONAL ACCOUNT DETAILS</h1></center>
<br/>
<div class="row ">
<div class="col-sm-2"></div>
<div class="col-sm-8 h4 panel" style="background-color:#64B5F6;">
<br/>
<div class="row ">
<div class="col-sm-3">
NAME :
<hr/>
</div>
<div class="col-sm-9">
<?php	
echo $row['doctorname'];
echo "<hr/>";
?>
</div>
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
SPECIALITY :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['speciality'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
FEE :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['fees'];
echo "<hr/>";
?>
</div>
</div>
<div class="row ">
<div class="col-sm-3">
TIMING :
<hr/>
</div>
<div class="col-sm-9">
<?php
echo $row['timing'];
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
<?php
}
?>
</div>
<div class="col-sm-2"></div>
</div>
</div>
</div>
<div id="footer" style="background-image:url('images/footer-bg.jpg');background-size:100% 100%;background-attachment:fixed;">
<div class="row">
<div class="col-sm-3">
<h3>E-Pulse Line</h3>
<p>Far far away, behind the word<br/> mountains, far from the<br/> countries.</p>

</div>
<div class="col-sm-2">
<h3>Department</h3>
<p>
<a href="#">&#187;Neurology</a><br/><br/>
<a href="#">&#187;Opthalmology</a><br/><br/>
<a href="#">&#187;Nuclear Magnetic</a><br/><br/>
<a href="#">&#187;Surgical</a><br/><br/>
<a href="#">&#187;Cardiology</a><br/><br/>
<a href="#">&#187;Dental</a>
</p>
</div>
<div class="col-sm-2">
<h3>Links</h3>
<p>
<a href="#">&#187;Home</a><br/><br/>
<a href="#">&#187;About</a><br/><br/>
<a href="#">&#187;Departments</a><br/><br/>
<a href="#">&#187;Doctors</a><br/><br/>
<a href="#">&#187;Blog</a><br/><br/>
<a href="#">&#187;Pricing</a><br/><br/>
<a href="#">&#187;Contact</a>
</p>
</div>
<div class="col-sm-2">
<h3>Services</h3>
<p>
<a href="#">&#187;Emergency Services</a><br/><br/>
<a href="#">&#187;Qualified Doctors</a><br/><br/>
<a href="#">&#187;Outdoors Checkup</a><br/><br/>
<a href="#">&#187;24 Hours Services</a>
</p>
</div>
<div class="col-sm-3">
<h3>Have a Questions?</h3>
<p>
<img src="images/loc.png" height="20px";width="20px";/>	203 Fake St. Mountain View, San Francisco, California, USA<br/><br/>
<a href="#"><img src="images/phone (1).png" height="20px";width="20px";/>+2 392 3929 210</a><br/><br/>
<a href="#"><img src="images/mail (1).png" height="20px";width="20px";/>info@yourdomain.com</a>
</p>
</div>
</div>
<br/>
<br/>
<br/>
<div id="lfooter">
<h5>Copyright&copy; All rights reserved.Developed & Designed By jaydeepsahu</h5>
<a href="#" style="margin-left:475px;"><img src="images/whatsapp (1).png" height="40px";width="40px";/></a>
<a href="#"><img src="images/instagram (2).png" height="40px";width="40px";/></a>
<a href="#"><img src="images/linkedin.png" height="40px";width="40px";/></a>
<a href="#"><img src="images/twitter.png" height="40px";width="40px";/></a>
<a href="#"><img src="images/facebook (2).png" height="40px";width="40px";/></a>
</div>
</div>
</div>
</body>
</html>
