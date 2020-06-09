<?php
session_start();
$_SESSION['patient'];
if($_SESSION['patient']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_question";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/discuss.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.min.js"></script>
</head>
<body><div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <a href="pprofile.php">MY ACCOUNT</a>
  <a href="pbook.php">BOOK APPOINTMENT</a>
  <a href="papp.php">MY APPOINTMENTS</a>
  <a href="discuss.php"style="background-color:white;color:blue;font-size:18;">DISCUSSION BOARD</a>
  <a href="pupdate.php">UPDATE PROFILE</a>
  <a href="pchange.php">CHANGE PASSWORD</a>
  <a href="pfeed.php">FEEDBACK</a>
  <a href="plogout.php">LOGOUT</a>
</div>
<div class="content">
<div id="outer">
<div id="welcome"></div>
<center>
<br/>
<br/>
<br/>
<br/>

<div id="inner">
<h1 style="font-family:cooper;">Everything Discuss Here!</h1>
<form action="question.php" method="post">
<span style="font-size:20px;margin-left:-560px;">Add Question</span>
<textarea name="ques" class="formcontrol"></textarea>&nbsp;&nbsp;
<br/>
<br/>
<input type="submit" value="Add" style="margin-left:-300px;height:40px;width:200px;background-color:red;border-radius:5px;border:1px solid red;color:white;"/>
</form>
<hr/>
<center>
<h2 align="center">Other Queries</h2>
<table cellspacing="1px" cellpadding="5px">

<tr>
<th>S. No.</th>
<th>Question</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><div id="sn"><?php echo $a;?></div></td>
<td><div id="ques"><?php echo $row['question'];?></div></td>
<td><a href="post.php?qid=<?php echo $row['0'];?>"><!--<button class="ans" style="background-color:red;">-->Post Answer</button></a></td>
<td><a href="view.php?qid=<?php echo $row['0'];?>"><!--<button class="ans" style="background-color:red;">-->View Answer</button></a></td>
</tr>
<?php
$a++;
}
?>
</table>
</center>
</div>

</div>
</div>
</div>

</body>
</html>