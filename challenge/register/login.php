<?php
	session_start();
	include "../../conn.php";
	$conn = connect();

	if(isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1){
		header("Location:./index.php");
		exit();
	}

	if(isset($_POST['uid']) && isset($_POST['password'])){
		$uid = mysqli_escape_string($conn,$_POST['uid']);
		$password = md5($_POST['password']);
		$sql = "select uid from users where uid='{$uid}' and password='{$password}'";
		$result = mysqli_query($conn,$sql);
		if($row = mysqli_fetch_row($result)){
			$_SESSION['islogin'] = 1;
			$_SESSION['uid'] =  $row[0];
			header("Location:./index.php");
			exit();
		}else{
			$_SESSION['islogin'] = 0;
			$alert = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h3>Login</h3>
				<?php if(isset($alert)) echo '<h3>username or password wrong</3>';?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="" method="POST">
					<div class="control-group">
						 <label class="control-label">uid</label>
						<div class="controls">
							<input type="text" name="uid"/>
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label">password</label>
						<div class="controls">
							<input type="password" name="password" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>