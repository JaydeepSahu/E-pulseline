<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
$feed=$_POST['feed'];
//echo $feed;
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['patid'];
}
$query="insert into tbl_feedback(patid,feedback,datetime) values ('$pid','$feed',now())";
mysql_query($query);
header("location:pprofile.php");
?>