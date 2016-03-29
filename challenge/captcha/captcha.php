<?php
	$flag = 'flag{use_session_please}';
	if(isset($_POST['captcha'])){
		if($_COOKIE['captcha'] === str_rot13($_POST['captcha'])){
			echo $flag;
		}else{
			echo 'get out robot biubiubiu~';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>captcha</title>
	<link type="text/css" href="../../css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../../css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<form method="POST" action="">
				<fieldset>
					 <legend>It is easy to human</legend> 
					 <input type="text" name="captcha"  placeholder="captcha" /> 
					 <span class="help-block">A CAPTCHA is a type of challenge-response test used in computing to determine whether or not the user is human.</span>
					 <img src="./getCaptcha.php">
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>