<?php
session_start();
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
session_destroy();
header("location:oops.php");	
}
$aid=$_REQUEST['aid'];
//echo $aid;
include("connect.php");
$query="select status from tbl_appointment where appid='$aid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$s=$row['status'];
}
if($s=='Confirm')
{
	$query2="update tbl_appointment set status='Pending' where appid='$aid'";
	mysql_query($query2);
	header("location:cancel.php");
}
if($s=='Pending')
{
	$query2="update tbl_appointment set status='Confirm' where appid='$aid'";
	mysql_query($query2);
	header("location:cancel.php");
}
?>