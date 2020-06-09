<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$spe=$_POST['spc'];
//echo $spe;
$query="select * from tbl_doctor where speciality='$spe'";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/book.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
<a href="pprofile.php">MY ACCOUNT</a>
  <a href="book.php"style="background-color:white;color:blue;font-size:18;">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome"></div>
<br/>
<br/>
<br/>
<h1 style="font-family:cooper;line-height:3;margin-left:190px;" >VIEW & BOOK DOCTORS</h1>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<table cellspacing="10px" style="margin-left:100px;">
<tr></tr>
<tr>
<td rowspan="8">
<h3 style="margin-left:40px;"><?php echo $a.").";?></h3>
<td rowspan="8">
<img src="doctor/dphoto/<?php echo $row['photo'];?>" height="200px" width="200px"/>
</td>
</tr>
<tr>
<td></td>
<td><span>NAME:</span></td>
<td><?php echo $row['doctorname'];?></td>
</tr>
<tr>
<td></td>
<td><span>GENDER:</span></td>
<td><?php echo $row['gender'];?></td>
</tr>
<tr>
<td></td>
<td><span>EMAIL:</span></td>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<td></td>
<td><span>MOBILE NO.:</span></td>
<td><?php echo $row['mobile'];?></td>
</tr>
<tr>
<td></td>
<td><span>FEE:</span></td>
<td><?php echo $row['fees'];?></td>
</tr>
<tr>
<td></td>
<td><span>TIMING:</span></td>
<td><?php echo $row['timing'];?></td>
</tr>

<tr>
<td></td>
<td><span>ADDRESS:</span></td>
<td><?php echo $row['address'];?></td>
</tr>
<tr>
<td></td>
<td>
<a href="bookapp.php?did=<?php echo $row['docid'];?>"><input type="button" value="Book Appointment" style="border-radius:30px;background-color:#ff1744 ;font-size:15px;padding:10px;color:white;align:left;border:1px solid #ff1744;outline:none; margin-left:30px;"/></a></td><td></td></tr>
</table>
<br/>
<br/>
<?php
$a++;
}
?>
</div>
</div>
</body>
</html>