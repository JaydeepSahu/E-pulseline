<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
$qid=$_REQUEST['qid'];
//echo $qid;
?>
<html>
<head>
<link href="css/post.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pprofile.php">MY ACCOUNT</a>
  <a href="pbook.php">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php"style="background-color:white;color:blue;font-size:18;">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<br/>
<br/>
<h1 style="font-family:cooper;text-align:center;">POST ANSWERS HERE</h1>
<br/>
<br/>
<br/>
<form action="answer.php" method="post">
<input type="hidden" name="qid" value="<?php echo $qid;?>"/>
<span style="font-size:25px;margin-left:100px;">Post Answer</span>
<textarea name="ans" class="formcontrol"></textarea>&nbsp;&nbsp;
<br/>
<br/>
<input type="submit" value="POST" style="margin-left:600px;height:40px;width:200px;background-color:red;border-radius:5px;border:1px solid red;color:white;"/>
</form>
</div>
</div>
</body>
</html>