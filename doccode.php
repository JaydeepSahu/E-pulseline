<?php
session_start();
$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
session_destroy();
header("location:oops.php");	
}
$name=$_POST['name'];
$name=ucwords($name);
//echo $name;
//echo $name."<br/>";
$fname=$_POST['fname'];
//echo $fname."<br/>";
$gender=$_POST['a'];
//echo $gender."<br/>";
$email=$_POST['email'];
//echo $email."<br/>";
$password=$_POST['password'];
//echo $password."<br/>";
$fees=$_POST['fees'];
//echo $fees."<br/>";
$time=$_POST['time'];
//echo $time."<br/>";
$speciality=$_POST['speciality'];
//echo $speciality."<br/>";
$address=$_POST['address'];
//echo $address."<br/>";
$mobile=$_POST['mobile'];
//echo $mobile."<br/>";
$filename=$_FILES['file']['name'];
//echo $filename."<br/>";
$type=$_FILES['file']['type'];
//echo $type."<br/>";
$size=$_FILES['file']['size'];
//echo $size."<br/>";
$path=$_FILES['file']['tmp_name'];
//echo $path."<br/>";

$location="doctor/dphoto/";
move_uploaded_file($path,$location.$filename);
include("connect.php");
$query="insert into tbl_doctor(doctorname,fathername,gender,email,password,fees,timing,speciality,address,mobile,photo,datetime) values ('$name','$fname','$gender','$email','$password','$fees','$time','$speciality','$address','$mobile','$filename',now())";
mysql_query($query);
header("location:login.php?msg=1");
?>