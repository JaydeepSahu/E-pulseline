<?php

?>

<html>
<head>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/forget.css"> 
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
        <form action="otpcode.php" method="post">
		<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2 h4">
Enter Your OTP :
</div>
<div class="col-sm-6">
<input type="text" name="otp" class="form-control"/>
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-2">
<input type="submit" value="SEND" class="form-control btn btn-success"/>
</div>
<div class="col-sm-5"></div>
</div>
</form>
</div>
<div class="col-sm-2"></div>
</div>
<br/>
<br/>
        <p>Notice : In some time otp has been sent in your registered mobile number. If all steps may be right.</p>

</body>
</html>