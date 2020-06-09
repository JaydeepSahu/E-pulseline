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
include("connect.php");
$query="select * from tbl_answer where qid='$qid'";
$res=mysql_query($query);

?>
<html>
<head>
<link href="css/view.css" rel="stylesheet" type="text/css"/>
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
<h1 style="font-family:cooper;text-align:center;">VIEW ANSWERS HERE</h1>
<br/>
<br/>
<br/>
<table cellpadding="10px" cellspacing="10px" border="0px" align="center">
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $sn; ?></td>
<td>
<?php echo $row['answer']; ?>
</td>
</tr>
<?php
$sn++;
}
?>
</table>
</div>
</div>
</body>
</html>