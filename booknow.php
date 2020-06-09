<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
$did=$_POST['did'];
//echo $did;
$doa=$_POST['date'];
//echo $doa;
session_start();
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['patid'];
}
$query2="insert into tbl_appointment(docid,patid,doa,status,datetime) values ('$did','$pid','$doa','Confirm',now())";
mysql_query($query2);
header("location:pprofile.php");
?>