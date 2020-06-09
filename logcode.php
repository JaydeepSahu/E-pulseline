<?php
session_start();
$who=$_POST['a'];
$email=$_POST['email'];
$password=$_POST['password'];
//echo $email,$password;
include("connect.php");
if($who=='Doctor')
{
	$query="select * from tbl_doctor where email='$email' and password='$password'";
    $res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['doctor']=$email;
		header("location:dprofile.php");
	}
	else
	{
		header("location:login.php");
	}
}
if($who=='Patient')
{
	$query="select * from tbl_patient where email='$email' and password='$password'";
    $res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['patient']=$email;
		header("location:pprofile.php");
	}
	else
	{
		header("location:login.php");
	}
}
?>