<?php
	error_reporting(0);
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
				<h3>Guess the passwd is difficult</h3>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="" method="POST">
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
							<button type="submit" class="btn">login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php
		if(isset($_POST['username']) && isset($_POST['password'])){
			include "../../conn.php";
			$conn = connect();
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$sql = "select `flag` from login where username ='{$username}' and password = '{$password}'";
			$result = mysqli_query($conn,$sql);
			$arr = mysqli_fetch_array($result);
			if($arr['flag']){
				echo '<h4>'.$arr['flag'].'</h4>';
			}else{
				echo '<h4>username or password wrong</h4>';
			}
		}	
		?>
	</div>
</body>
</html>