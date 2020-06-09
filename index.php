<?php

?>
<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/accordion.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/slider.js"></script>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/hidemenu.js"></script>
</head>
<body onload="slide()">
<div id="outer">
<div id="header">
<!--<span><a href="#"><input type="text" placeholder="search here!"></a></span>-->
</div>
<div id="home" style="background-image:url('images/bg_3.jpg');
	background-size:100% 100%;
	background-attachment:fixed;">
<div id="menu">
<ul>
<div class="col-sm-6">
<li><a href="index.php"> <img src="images/logo1.png" height="100px" width="130px" style="margin-left:-50px;"/></a></li>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li class="dropdown"><a href="doctor.php">DOCTOR</a></li>
<li><a href="patient.php">PATIENT</a></li>
<li><a href="#">NEWS</a></li>
 </div>
 <div class="col-sm-2">

 </div>
 <div class="col-sm-4" style="margin-top:20px;">
<li><a href="login.php">LOGIN</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><div id="photo"><img src="images/user (2).png" height="50px" width="50px" onclick="Toggle(this)"/></div></li>
<li><a href="profile.php">PROFILE</a></li>
</div>
</ul>
</div>
<!--<div id="home" style="background-image:url('images/logo1.png');
	background-size:100% 600px;
	background-attachment:fixed;opacity:0.3">-->
<h4>Welcome to E-Pulse Line</h4><br/><br/>
<h1>We are here<br/>for your care</h1>
<p>Epulseline.com is not only a web portal;<br/> it is a live project of Epulseline (India).<br/> In future we
will add more and more features on it.<br/> This portal can be used by any<br/> doctors Clinic or
Hospitals.</p>
<a href="book.php"><input type="button" value="Make an appointment" style="border:1px solid #2196f3; border-radius:25px;background-color:#2196f3;color:white; font-size:30px; margin-left:75px;outline:none;"/></a>
</div></div>
<div id="row1">
<div class="side"></div>
<div class="side1" style="background-image:url('images/about.jpg'); background-size:100% 100%;">
</div>
<div class="side2">
<h1>We Are <span style="color:blue;">E-PULSE LINE</span> An Online Medical Clinic</h1><br/>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
<a href="book.php"><input type="button" value="Make an appointment" style="border-radius:30px;background-color:#2196f3; font-size:20px;padding:12px;margin-left:90px;color:white;border:1px solid #2196f3;outline:none;"/></a>
<a href="contact.php"><input type="button" value="Contact us" style="border-radius:30px;background-color:#ff1744 ;font-size:20px;padding:12px;color:white;border:1px solid #ff1744;outline:none;"/></a>

</div>
<div class="side"></div>
</div>
<div id="row2">
<div class="side3"></div>
<div class="side4">
<div id="our"><span>Our Services</span></div>
<div class="services">
<div class="s1">
<span class="fa fa-ambulance"></span>
</div>
<div class="s2">
<h2>Emergency Services</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="services">
<div class="s1">
<span class="fa fa-user-md"></span>
</div>
<div class="s2">
<h2>Qualified Doctors</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="services">
<div class="s1">
<span class="fa fa-stethoscope"></span></a>
</div>
<div class="s2">
<h2>Outdoor Checkup</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="services">
<div class="s1">
<span class="fa fa-clock-o"></span>
</div>
<div class="s2">
<h2>24 Hours Services</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
<div class="side5">

<form align="center">
<h2 style="color:#ff1744;">FREE CONSULTATION</h2>
<input type="text" name="name" placeholder="First Name" class="formcontrol"/>
<br/>
<br/>
<input type="text" name="fname" placeholder="Last Name" class="formcontrol"/>
<br/>
<br/>
<input type="text" placeholder="Date" class="formcontrol"/>
<br/>
<br/>
<input type="text" placeholder="Time" class="formcontrol"/>
<br/>
<br/>
<input type="text" placeholder="Mobile" class="formcontrol"/>
<br/>
<br/> 
<select class="formcontrol">
<option value="">Select Your Services</option>
<option>Neutrology</option>
<option>Dental</option>
<option>Opthalmology</option>
<option>Surgical</option>
<option>Cardiology</option>
<option>Nuclear Magnetic</option>
</select>
<br/> 
<br/>
<textarea style="resize:none;" class="formcontrol" placeholder="Message"></textarea>
<br/>
<br/>
<input type="button" value="Appointment" class="formcontrol" style="border-radius:30px;background-color:#ff1744; font-size:20px;padding:12px;color:white;border:1px solid #ff1744;outline:none;"/>
</form>
</div>
<div class="side3"></div>
</div>
<div id="slider" style="text-align:center;">
<span>Your health is our priority</span><br/>
<h3>We can manage your dream building A small river named Duden flows by their place</h3>
<input type="button" value="Search Places" style="border-radius:30px;background-color:white; font-size:20px;padding:15px;border:1px solid white;outline:none;"/>
</div>
<div id="row3"><center>
<div class="doctor"><img src="images/doc-6.jpg" height="300px" width=90%; />
<h3>Dr. Lloyd Wilson</h3>
<span>NEUROLOGIST</span>
</div>
<div class="doctor"><img src="images/doc-2.jpg" height="300px" width=90%;/>
<h3>Dr. Richi Bejos </h3>
<span>SURGON</span>
</div>
<div class="doctor"><img src="images/doc-3.jpg" height="300px" width=90%;/>
<h3>Dr. Ian Smith</h3>
<span>OPHTHALMOLOGIST</span>
</div>
<div class="doctor"><img src="images/doc-5.jpg" height="300px" width=90%;/>
<h3>Dr. Alicia Henderson</h3>
<span>PEDIATRICIAN</span>
</div>
</center></div>
<div id="row3"><center>
<div class="doctor"><img src="images/doc-7.jpg" height="300px" width=90%;/>
<h3>Dr. Rachel Parker</h3>
<span>PHYSICIAN</span>
</div>
<div class="doctor"><img src="images/doc-1.jpg" height="300px" width=90%;/>
<h3>Dr. Wilium Son</h3>
<span>Dentist</span>
</div>
<div class="doctor"><img src="images/doc-4.jpg" height="300px" width=90%;/>
<h3>Dr. Shiba Komr</h3>
<span>EYE SPECIALIST</span>
</div>
<div class="doctor"><img src="images/doc-8.jpg" height="300px" width=90%;/>
<h3>Dr. Tukri Gates</h3>
<span>CARDIOLOGIST</span>
</div>
</center></div>
<div id="row4"><center>
<div class="counting">
<img src="images/capture.png"/><br/>
<span class="counter">5632</span>
<h6>Blood Donation</h6>
</div>
<div class="counting">
<img src="images/capture1.png"/><br/>
<span class="counter">23k</span>
<h6>Patients</h6>
</div>
<div class="counting">
<img src="images/capture2.png"/><br/>
<span class="counter">25</span>
<h6>Specialities</h6>
</div>
<div class="counting">
<img src="images/capture3.png"/><br/>
<span class="counter">723</span>
<h6>Doctors</h6>
</div>
</center></div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h2 font-weight-bold">Leave a comment</h3>
                <form action="commentcode.php" method="post" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" onblur="checkNameField(this)"  class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" onblur="checkEmail(this)"   class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="number">Mobile No*.</label>
                    <input type="text"  onblur="checkMobileNumber(this)" maxlength="10" class="form-control" id="mobile" name="mobile">
                  </div>

                  <div class="form-group">
                    <label for="message">Message*</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
			  </div>
			  <div class="col-sm-3"></div>
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