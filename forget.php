<?php

?>
<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<link rel="stylesheet" type="text/css" href="css/forget.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:rgba(0,0,255,0.2);" background-size="100% 100%">
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
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<form action="forgetcode.php" method="post">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2 h4">
Choose :
</div>
<div class="col-sm-6 h4">
<input type="radio" name="a" Value="Doctor" required/>Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="a" Value="Patient" required/>Patient
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2 h4">
Mobile No. :
</div>
<div class="col-sm-6">
<input type="text" name="mobile" placeholder="Enter Registered Mobile Number" class="form-control" required/>
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2 h4">
E-mail Id :
</div>
<div class="col-sm-6">
<input type="text" name="email" placeholder="Enter Registered E-mail Id" class="form-control" required/>
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-2">
<input type="submit" value="SUBMIT" class="form-control btn btn-success"/>
</div>
<div class="col-sm-5"></div>
</div>
</form>
     
       <p> NOTICE : Click SUBMIT button to depart in step 2(For OTP).</p>
</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>