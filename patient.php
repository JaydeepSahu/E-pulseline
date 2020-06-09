<?php
$r6=chr(rand(65,90));
$r3=rand(0,9);
$r2=chr(rand(65,90));
$r1=rand(0,9);

?>
<html>
<head>
<script>

</script>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/patvalid.js"></script>
<script src="js/hidemenu2.js"></script>
<link href="css/pat.css" rel="stylesheet" type="text/css"/>
 
</head>
<body   style="background-image:url('images/doctor-holding-stethoscope_23-2147822716.jpg');background-size:100% 100%; ">
<div id="doc">
<div id="menu">
<ul>
<div class="col-sm-6">
<li><a href="index.php"> <img src="images/logo1.png" height="100px" width="130px" style="margin-left:-65px;margin-top:-28px;"/></a></li>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="doctor.php">DOCTOR</a></li>
<li><a href="patient.php">PATIENT</a></li>
<li><a href="#">NEWS</a></li>
 </div>
 <div class="col-sm-2"></div>
 <div class="col-sm-4">
<li><a href="login.php" style="margin-left:-10px;">LOGIN</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li> <div id="photo" style="text-align:center; line-height:50px;    font-size: 20px;"><img src="images/user (2).png" height="50px" width="50px"/></div> </li>
<li><a href="#">PROFILE</a></li>
</div>
</ul>
</div>



<br>
<h1><br><div class="col-sm-12" style="text-align:center">
PATIENT REGISTRATION
</div><br/></h1>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-10 panel" style="background-color:#64B5F6;">
<form action="patcode.php" method="post"   enctype="multipart/form-data">
<div class="row">


</div>

<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 h4">DOCTOR NAME :</div>
<div class="col-sm-3"><input type="text" name="name" placeholder="Enter Your Name" onblur="checkNameField(this)" id="name" class="form-control"/></div>
<div class="col-sm-2 h4">FATHER'S NAME :</div>
<div class="col-sm-3"><input type="text" name="fname" placeholder="Enter Father's Name" id="fname" onblur="checkNameField(this)" class="form-control"/></div>
<div class="col-sm-1"></div>
</div>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 h4">GENDER :</div>
<div class="col-sm-1 h4"><input type="radio" name="a" value="male"  />&nbsp; Male
 </div>
<div class="col-sm-2 h4"> 
<input type="radio" name="a" value="female"  />&nbsp; Female</div>
 
<div class="col-sm-2 h4">MOBILE NO. :</div>
<div class="col-sm-3"><input type="text" name="mobile" placeholder="Enter Mobile Number"  onblur="checkMobileNumber(this)" maxlength="10" class="form-control"/></div>
<div class="col-sm-1"></div>
</div>
<br>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 h4">EMAIL ID :</div>
<div class="col-sm-3"><input type="text" name="email" placeholder="Enter Email Id" onblur="checkEmail(this)"  class="form-control"/>
 </div>
 
 
<div class="col-sm-2 h4">PASSWORD :</div>
<div class="col-sm-3"><input type="text" name="password" placeholder="Enter Your Password" class="form-control"/></div>
<div class="col-sm-1"></div>
</div>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 h4">ADDRESS :</div>
<div class="col-sm-3">
<textarea placeholder="Enter Your Address" style="resize:none" name="address" class="form-control"></textarea></div>
<div class="col-sm-2 h4">PIN CODE :</div>
<div class="col-sm-3"><input type="text" name="pin" placeholder="Enter Pin Number" maxlength="6" onblur="checkPinCode(this)" class="form-control"/></div>
<div class="col-sm-1"></div>
</div>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 h4">UPLOAD PHOTO :</div>
<div class="col-sm-3"><input type="file" name="file" onchange="FileUpload(this)"  class="form-control"/>
 </div>
 
 
<div class="col-sm-2 h4">CAPTCHA :</div>
<div class="col-sm-1"><input type="text" id="txtc1" readonly value="<?php echo $r1,$r2,$r3,$r6;?>" class="form-control" style="text-align:left;"/></div>
<div class="col-sm-1"></div>
<div class="col-sm-1"><input type="text" id="txtc2" class="form-control" style="text-align:left;"/></div>
</div>
<br>
<div class="row"> 
<div class="col-sm-5"> </div>
<div class="col-sm-2">
<input type="submit" value="REGISTER" class="form-control btn btn-danger"  onclick="return Validate()" id="btnSubmit" />
</div>
<div class="col-sm-5"></div>
</div>
<div class="row">
<div class="col-sm-12" style="text-align:center">
 <span><a href="login.php" class="btn btn-link">Already Registered "Click Here!"</a></span>
 </div>
</div>
</div>
</div>

<br/>
<br/>
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