<?php
	//error_reporting(0);
	session_start();
	include "../../conn.php";
	$conn = connect();

	function check_id($conn,$uid){
		$sql = "select count(*) from users where uid = $uid";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($result);
		return !$row[0];
	}

	if(isset($_POST['uid']) && isset($_POST['username']) && isset($_POST['password'])){
		if(!is_numeric($_POST['uid'])){
			echo 'uid must be numeric';
			exit();
		}
		$uid = mysqli_escape_string($conn,$_POST['uid']);
		$username = mysqli_escape_string($conn,$_POST['username']);
		$password = md5($_POST['password']);
		if(check_id($conn,$uid)){
			$sql = "insert into users(`uid`,`username`,`password`) values ({$uid},'{$username}','{$password}')";
			mysqli_query($conn,$sql);
			header("Location:./login.php");
		}else{
			$alert = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Do you know is_numeric</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h3>regist</h3>
				<?php if(isset($alert)) echo '<h3>The uid has been registed</h3';?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="" method="POST">
					<div class="control-group">
						 	<label class="control-label">UID</label>
						<div class="controls">
							<input type="text" name="uid"/>
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label">username</label>
						<div class="controls">
							<input type="text" name="username"/>
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
							<button type="submit" class="btn">regist</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>