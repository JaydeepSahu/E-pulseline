<?php
session_start();
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['doctor'];
include("connect.php");
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$did=$row['docid'];
}
$name=$_POST['name'];

$fname=$_POST['fname'];

$gender=$_POST['a'];

$fees=$_POST['fees'];

$time=$_POST['time'];

$speciality=$_POST['speciality'];

$address=$_POST['address'];

$mobile=$_POST['mobile'];

$filename=$_FILES['file']['name'];

$type=$_FILES['file']['type'];

$size=$_FILES['file']['size'];

$path=$_FILES['file']['tmp_name'];

$location="doctor/dphoto/";
move_uploaded_file($path,$location.$filename);
include("connect.php");
echo $query2="update tbl_doctor  set doctorname='$name', fathername='$fname', gender='$gender', fees='$fees', timing='$time', speciality='$speciality', address='$address', mobile='$mobile', photo='$filename' where docid='$did' ";

mysql_query($query2);
header("location:dprofile.php?msg=1");
?>