<?php
	function check(){
		if(isset($_POST['uid']) && isset($_GET['token'])){
			$token = base64_decode($_GET['token']);
			$uid = $_POST['uid'];
			$str = $uid."&"."admin";
			if($str === $token){
				return true;
			}else{
				return false;
			}

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>reset password</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
	<script type="text/javascript">
		<?php
			if(isset($_POST['uid'])){
				if(check()){
					$str = "flag{reset_the_admin}";
				}else{
					$str = "reset successful,but only reset your account?";
				}
				echo "window.alert('$str')";
			}
		?>
	</script>
</head>
<body>
<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h3>reset password</h3>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="" method="POST">
					<input type="hidden" name="uid" value="10002" />
					<div class="control-group">
						 <label class="control-label">new password</label>
						<div class="controls">
							<input type="password" name="password" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>