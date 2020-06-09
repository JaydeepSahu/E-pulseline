<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['patid'];
}
$query2="insert into tbl_question(patid,question,date) values ('$pid','$ques',now())";
mysql_query($query2);
header("location:discuss.php");
?>