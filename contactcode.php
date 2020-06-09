<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$msg=$_POST['msg'];
include("connect.php");
$query="insert into tbl_contact(name,email,mobile,message,datetime) values ('$name','$email','$mobile','$msg',now());";
mysql_query($query);
header("location:contact.php?msg=c");

?>