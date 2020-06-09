
<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['patient'];
include("connect.php");
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['patid'];
}
$name=$_POST['name'];

$fname=$_POST['fname'];

$gender=$_POST['a'];

$age=$_POST['age'];

$pincode=$_POST['pincode'];

$address=$_POST['address'];

$mobile=$_POST['mobile'];

$filename=$_FILES['file']['name'];

$type=$_FILES['file']['type'];

$size=$_FILES['file']['size'];

$path=$_FILES['file']['tmp_name'];

$location="patient/pphoto/";
move_uploaded_file($path,$location.$filename);
include("connect.php");
$query2="update tbl_patient set name='$name', fathername='$fname', gender='$gender', age='$age', pincode='$pincode',  address='$address', mobile='$mobile', photo='$filename' where patid='$pid'";

mysql_query($query2);
header("location:pprofile.php?msg=1");
?>