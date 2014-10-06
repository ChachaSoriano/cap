<?php include '../../config.php';?>
<?php
	if(isset($_SESSION['student'])){
		header("Location: grades");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CEAS Access Point | Student Portal</title>
	<link rel="stylesheet" href="themes/mobiletheme.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="js/jquery.mobile.structure-1.4.3.min.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.3.min.js"></script>
	<script type="text/javascript" src="js/jquery_validate.js"></script>

	<script src="../js/jquery.carouFredSel-5.5.0-packed.js"></script>
	<script src="../js/functions.js"></script>
	<script type="text/javascript" src="../source/scripts/js.js"></script>
	<script type="text/javascript" src="../source/scripts/ui.js"></script>
	<script type="text/javascript" src="functions/script.js"></script>

</head>
<body>
<div data-role="page" id="index" data-theme="d" data-position="fixed" style="background-image:url('images/bg.jpg'); background-size:cover; background-repeat:no-repeat;">
<div data-role="header" data-theme="a"  align="center" data-position="fixed" style="height:10%;">
 <img src="images/header1.png" height="100%" width="95%">
</div>
	<div class="page-content" align="center" style="color:#fff;">
	<br />
	<img src="images/cap1.png" height="70%" width="70%">
			<div id="login-form">
				<h3>STUDENT LOGIN</h3>
				<div>
					<div class="login-error" style="color:red;"></div>
				</div>
				
				<div><span class="inline">Username: </span><input type="text" class="txt" id="username" maxlength="9" placeholder="Enter your Student Number" data-theme="c">
				</div>
				<br />
				<div><span class="inline">Password: </span><input type="password" class="txt" id="password" placeholder="Enter your Password" data-theme="c">
				</div>
				<button id="login" data-theme="a">Login</button>
				</div>
		</div>
	</div>
      </div>
      </div>
</body>
</html>