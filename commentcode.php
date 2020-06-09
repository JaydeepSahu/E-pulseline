<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];
include("connect.php");
$query="insert into tbl_comment(name,email,mobile,comment,datetime) values ('$name','$email','$mobile','$message',now())";
mysql_query($query);
header("location:index.php");
?>