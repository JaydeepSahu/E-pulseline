
<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/adlogin.js"></script>
<link href="css/adstyle.css" rel="stylesheet" type="text/css"/>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="inner" style="background-image:url('../images/dustin-lee-jLwVAUtLOAQ-unsplash.jpg');">
<br/>
<br/>
<br/>
<br/>
<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	?>
	<h2 style="letter-spacing:25px;background-image:linear-gradient(to right,red,blue);font-family:cooper;margin-top:-90px;">Invalid Email or Password!</h2>	
	<?php
}
if($msg==2)
{
	?>
	<h2 style="letter-spacing:25px;;background-image:linear-gradient(to right,red,blue);font-family:cooper;margin-top:-60px;">Logout Successfully!</h2>
	<?php
}
if($msg==3)
{
	?>
	<h2 style="letter-spacing:25px;;color:linear-gradient(to right,red,blue);font-family:cooper;"> Login First!</h2>
	<?php
}
if($msg==4)
{
	?>
	<h1 style="letter-spacing:25px;;color:linear-gradient(to right,red,blue);font-family:cooper;">PASSWORD CHANGED SUCCESSFULLY. LOGIN AGAIN!</h1>
	<?php
}
?>
<br/>
<br/>
<br/>
<br/>
<br/>

<p>ADMIN LOGIN</p>
<center>
<div id="center">
<form action="adlogcode.php" method="post">
<br/>
<br/>
<input type="text" name="email" placeholder="Enter Your Email Id" onblur="checkEmail(this)" class="formcontrol"/>
<br/>
<br/>
<input type="password" name="password" id="password"  placeholder="Enter Your Password" class="formcontrol" />
<div id="eye"> <img src="../images/eye.png" height="30px" width="30px" onclick="Toggle(this)" style="margin-right:-37px;margin-bottom:0px;"/></div>
<br/>
<br/>
<br/>
<br/>
<input type="submit" value="LOGIN"  class="formcontrol" style="background-color:#2196f3;color:white;"/>
<br/>
<a href="../index.php">Back to INDEX.</a>
</form>
</div>
</center>
</div>
</body>
</html>
