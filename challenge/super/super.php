<?php
	//payload _SESSION[permission]=root&_SESSION[islogin]=1&_SESSION[username]=2333
	session_start();
	extract($_POST);
	$flag = "flag{override_var_is_dangerous}";
	if(isset($username) && isset($password)){
		if($username === "Jaune" && $password === "123456"){
			$_SESSION['islogin'] = true;
			$_SESSION['username'] = $username;
			$permission = "Guest";
			$_SESSION['permission'] = $permission;
			header("location:./super.php");
			exit();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>super</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
	<?php
		if(isset($_SESSION['islogin']) && $_SESSION['islogin'] == true){
			$username = $_SESSION['username'];
			$permission = $_SESSION['permission'];
			echo "<h3>Welcome ".$permission.",".$username."</h3>";
			echo '<!--flush cookie to logout-->';
			if($permission === "root"){
				echo $flag;
			}
		}else{
			echo '
			<div class="row-fluid">
			<div class="span12">
				<h3>Though you know the passwd ,Nothing you can do...</h3>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="" method="POST">
					<div class="control-group">
						 <label class="control-label">username</label>
						<div class="controls">
							<input type="text" name="username" placeholder="Jaune" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label">password</label>
						<div class="controls">
							<input type="password" name="password" value="123456"/>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">登陆</button>
						</div>
					</div>
				</form>
			</div>
		</div>';
		}
	?>
	<!--hint:
		extract($_POST);
		if($username === "Jaune" && $password === "123456"){
			$_SESSION['islogin'] = true;
			$_SESSION['username'] = $username;
			$permission = "Guest";
			$_SESSION['permission'] = $permission;
		}
	-->
	</div>
</body>
</html>