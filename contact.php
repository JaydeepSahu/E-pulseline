<?php

?>
<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/contact.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/hidemenu2.js"></script>
</head>
<body>
<div id="outer">
<div id="menu">
<ul>
<div class="col-sm-6">
<li><a href="index.php"> <img src="images/logo1.png" height="100px" width="130px" style="margin-left:-50px;margin-top:-10px;"/></a></li>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="doctor.php">DOCTOR</a></li>
<li><a href="patient.php">PATIENT</a></li>
<li><a href="#">NEWS</a></li>
 </div>
 <div class="col-sm-2">

 </div>
 <div class="col-sm-4">
<li><a href="login.php">LOGIN</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="#"><div id="photo"><img src="images/user (2).png" height="50px" width="50px"/></div></a></li>
<li><a href="#">PROFILE</a></li>
</div>
</ul>
</div>
<div id="whole">

<div id="left">
<center>
<div id="upper">
<div class="side">
<div class="side1">
<h2>CONTACTS</h2>
<h4 style="margin-left:50px;">Phone:<img src="images/whatsapp (1).png" height="20px" width="20px"/>+91 842 932 3161</h4>
<h4 style="margin-left:108px;"><img src="images/mail (1).png" height="20px" width="20px"/>+91 829 984 5318
<h4 style="margin-left:50px;">For any query:</h4>
<h4 style="margin-left:50px;">call at:<img src="images/telephone.png" height="20px" width="20px"/> 1800 800 204</h4>
<h4 style="margin-left:128px;">1800 800 203</h4>
</div>
</div>
<div class="side">
<div class="side1">
<h2>ADDRESS</h2>
<h4 style="margin-left:80px;"><img src="images/placeholder.png" height="20px" width="20px"/>E-Pulse Company</h4>
<h4 style="margin-left:100px;">Kursi Street,</h4>
<h4 style="margin-left:100px;">Janakipuram,Sector J</h4>
<h4 style="margin-left:100px;">Lucknow(U.P.)</h4>
<h4 style="margin-left:100px;">INDIA.</h4>
</div>
</div>
</div>
<div id="lower">
<div id="lower1">
<h2>FOLLOW US ON</h2>
<h4 style="margin-left:50px"><img src="images/email.png" height="20px" width="20px"/>E-mail:myepulselineproject@yahoo.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/email.png" height="20px" width="20px"/> epulseline.org@gmail.com</h4>
<h4 style="margin-left:50px"><img src="images/twitter.png" height="20px" width="20px"/>Twitter:@epulse&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/facebook (2).png" height="20px" width="20px"/>Facebook:E-PULSE LINE</h4>
<h4  style="margin-left:50px"><img src="images/instagram (1).png" height="20px" width="20px"/>Instagram:EPulseLine</h4>
</div>
</div>
</center>
</div>
<div id="right" style"background-image:url('images/photo-1526554850534-7c78330d5f90.jpg'); background-size:100% 100%;">
<center>
<?php
 error_reporting(0);
$msg=$_REQUEST['msg'];
 
if($msg=="c")
{
?>
	<h3 style="letter-spacing:20px;font-family:cooper;">WOOHOO!YOUR INFORMATION WAS SUCCESSFULLY SEND.</h1>
<?php
}
?><br/>
<br/>
<div id="lower1">
<br/>
	<h2>Get in Touch</h2>
<form method="post" action="contactcode.php">
<input type="text" name="name" placeholder="Enter Your Name" class="formcontrol"  style="marginleft:180px;margin-top:30px;"/>
<br/>
<br/>
<input type="text" name="email" placeholder="Enter Your Email Id" class="formcontrol"  style"margin-left:210px;"/>
<br/>
<br/>
<input type="text" name="mobile" placeholder="Enter Your Mobile Number" class="formcontrol"  style"margin-left:230px;"/>
<br/>
<br/>
<textarea name="msg" placeholder="Give a reason to contact us..." class="formcontrol"  style="marginleft:260px;resize:none;height:100px;text-overflow: ellipsis;"></textarea>
<br/>
<br/>
<input type="submit" value="SEND" class="formcontrol" style="marginleft:280px;background-color:red;"/>
</form>
</div>
</center>
</div>
</div>
</div>
</div>
<!--<div id="info"><h1>See Google Map To Reach Us</h1></div>-->
<div id="down">
<div id="map">
<iframe src="https://www.google.com/maps/embed?
pb=!1m14!1m8!1m3!1d14234.67795370525!2d80.94821!3d26.88224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x730fe46201abc68a!2sSoftpro+India!5e0!3m2!1sen!2sin!4v1411887056855" width="100%" height="100%"></iframe>
</div>
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
</body>
</html>