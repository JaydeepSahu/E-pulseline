<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_question";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$qid=$row['qid'];
	$pid=$row['patid'];
}
$query2="select * from tbl_answer where patid='$qid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$answer=$row2['answer'];
}

 $pid=$row['patid'];
$query3="select * from tbl_patient where patid='$pid'";
$res3=mysql_query($query3);
$row3=mysql_fetch_array($res3,MYSQL_BOTH)

 ?>

<html>
<head>
<link href="css/viewdis.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="viewdoc.php">VIEW DOCTORS</a>
  <a href="viewpat.php">VIEW PATIENTS</a>
 <a href="viewcomment.php">VIEW GENERAL COMMENTS</a>
  <a href="viewcon.php">VIEW CONTACTS</a>
  <a href="viewdis.php" style="background-color:white;color:blue;font-size:18px;">VIEW DISCUSSION BOARD</a>
  <a href="viewfeed.php">VIEW FEEDBACK</a>
  <a href="viewapp.php">VIEW APPOINTMENTS</a>
  <a href="adchange.php">CHANGE PASSWORD</a>
  <a href="adlogout.php">LOGOUT</a>
</div>
<!-- Page content -->
<div class="content">
<div id="outer" style="background-image:url('images/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg');background-size:100% 100%;">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<center><h1 style="font-family:cooper;">VIEW ALL DISCUSSION HERE</h1></center>
<br/>
<form>
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5">
<?php echo $row3['name'];?>
<input type="text" readonly value="<?php echo $row['question'];?>" class="form-control" style="align:left;height:60px;background-color:;"/>
</div>
<div class="col-sm-5"></div>
</div>
<br/>
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-5">
<input type="text" readonly value="<?php echo $row2['answer'];?>" class="form-control" style="align:right;height:60px;"/>
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
<hr/>
<?php
$sn++;
}
?>
</form>
</body>
</html>
</div>
</div>
</body>
</html>