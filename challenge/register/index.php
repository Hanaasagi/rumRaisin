<?php
	//payload	uid = 0x31206f722031
	session_start();
	include "../../conn.php";
	$conn = connect();
	if(isset($_GET['logout']) && $_GET['logout'] == true){
		$_SESSION['islogin'] = 0;
		$_SESSION['uid'] = null;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			<?php
				if(isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1){
					$uid = $_SESSION['uid'];
					$sql = "select username from users where uid = $uid";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_row($result)){
						echo '<h3>Hello '.$row[0].'</h3>';
					}
				}else{
					header("Location:./login.php");
				}
			?>
			</div>
			<div class="span12">
				<a class="btn btn-primary" href="./index.php?logout=true">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>