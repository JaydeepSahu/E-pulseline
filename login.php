<?php
	
?>
<html>
<head>
<script src="js/login.js"></script>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/hidemenu2.js"></script>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer" style="background-image:url('images/Neurology.jpg');background-size:100% 100%;">
<div id="menu">
<ul>
<div class="col-sm-6">
<li><a href="index.php"> <img src="images/logo1.png" height="100px" width="130px" style="margin-left:-50px;margin-top:-28px;"/></a></li>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="doctor.php">DOCTOR</a></li>
<li><a href="patient.php">PATIENT</a></li>
<li><a href="#">NEWS</a></li>
 </div>
 <div class="col-sm-2"></div>
 <div class="col-sm-4">
<li><a href="login.php">LOGIN</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><div id="photo"><img src="images/user (2).png" height="50px" width="50px" onload="Change(this)" id="pic"/></div></li>
<li><a href="#">PROFILE</a></li>
</div>
</ul>
</div>
<div id="inner">
<center>
<?php
 error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg=="1")
{
?>
	<h1 style="letter-spacing:25px;;color:linear-gradient(to right,red,blue);font-family:cooper;">REGISTRATION SUCCESSFULL!</h1>
<?php
}
?>
<?php
if($msg=="2")
{
?>
	<h1 style="letter-spacing:25px;;color:linear-gradient(to right,red,blue);font-family:cooper;">PASSWORD CHANGED SUCCESSFULLY. LOGIN AGAIN!</h1>
<?php
}
?>
<h1 style="font-family:Goudy Stout;color:red;font-size:40px;margin-top:90px;">LOGIN HERE!</h1>
<br/>
<div id="center">



<br/>
<br/>
<br/>
<form action="logcode.php" method="post">
<span style="font-family:inherit;font-size:30px;color:#2196f3;margin-left:25px;;">Who You Are:-</span>
<input type="radio" name="a" value="Doctor"/><span style="font-family:arial;font-size:20px;color:red;" required/>A DOCTOR</span>&nbsp;OR&nbsp;
<input type="radio" name="a" value="Patient"/><span style="font-family:arial;font-size:20px;color:red;" required/>A PATIENT</span>
<br/><br/>
<br/>
<br/>
<input type="text" name="email" placeholder="Enter E-mail or Mobile number" onblur="checkEmail(this)"  class="formcontrol" required/>
<br/>
<br/>
<input type="password" name="password" id="password"  placeholder="Enter Your Password" class="formcontrol" required/><div id="eyes"><img src="images/eye.png" height="30px" width="30px" onclick="Toggle(this)"  style="margin-right:-40px;"/></div>

<br/>
<br/>
<input type="submit" value="LOGIN"  class="formcontrol" style="background-color:#2196f3;color:white;"/>
</form>
<a href="index.php">Not yet Registered. Create an account</a>
<br/>
<br/>
<input type="checkbox"><a href="#" style="text-decoration:none;font-size:20px;margin-left:20px;">Apply Terms & Conditions.</a>
<span><a href="forget.php" style="text-decoration:none;margin-left:70px;font-size:20px;">Forgot Password</a></span>
</div>


</center>
</div>
<div id="footer" style="background-image:url('images/footer-bg.jpg');background-size:100% 100%;background-attachment:fixed;">
<div class="col">
<h3>E-Pulse Line</h3>
<p>Far far away, behind the word mountains, far from the countries.</p>

</div>
<div class="col">
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
<div class="col">
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
<div class="col">
<h3>Services</h3>
<p>
<a href="#">&#187;Emergency Services</a><br/><br/>
<a href="#">&#187;Qualified Doctors</a><br/><br/>
<a href="#">&#187;Outdoors Checkup</a><br/><br/>
<a href="#">&#187;24 Hours Services</a>
</p>
</div>
<div class="col">
<h3>Have a Questions?</h3>
<p>
<img src="images/loc.png" height="20px";width="20px";/>	203 Fake St. Mountain View, San Francisco, California, USA<br/><br/>
<a href="#"><img src="images/phone (1).png" height="20px";width="20px";/>+2 392 3929 210</a><br/><br/>
<a href="#"><img src="images/mail (1).png" height="20px";width="20px";/>info@yourdomain.com</a>
</p>
</div>
<div id="lfooter">
<h5>Copyright&copy; All rights reserved.Developed & Designed By jaydeepsahu</h5>
<a href="#" style="margin-left:575px;"><img src="images/whatsapp (1).png" height="40px";width="40px";/></a>
<a href="#"><img src="images/instagram (2).png" height="40px";width="40px";/></a>
<a href="#"><img src="images/linkedin.png" height="40px";width="40px";/></a>
<a href="#"><img src="images/twitter.png" height="40px";width="40px";/></a>
<a href="#"><img src="images/facebook (2).png" height="40px" width="40px"/></a>
</div>
</div>
</div>
</body>
</html>