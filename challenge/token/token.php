<?php 
	session_start();
	date_default_timezone_set('Asia/Shanghai');

	$flag = "{burst_is_dangerous}";

	if(isset($_POST['token']) && isset($_SESSION['token'])){
		if($_POST['token'] === $_SESSION['token']){
			echo "reset success".$flag."</br>";
		}else{
			echo "token not match";
		}
		exit();
	}
	if(isset($_GET['reset']) && $_GET['reset'] == true){
		mt_srand(time());
		$rand = mt_rand();
		$_SESSION['token'] = sha1(md5($rand));
		//echo $_SESSION['token'];
		echo 'I send an email to your mailbox,Please check and input your token to reset your password';
		echo '<form action="" method="POST">
		<input type="text" name="token">
		<input type="submit" value="submit">
		</form>';
		exit();
	}
	echo '<a href="./token.php?reset=true">Reset Password</a>';
?>

<!-- 
session_start();
date_default_timezone_set('Asia/Shanghai');
if(isset($_POST['token']) && isset($_SESSION['token'])){
	if($_POST['token'] === $_SESSION['token']){
		echo "reset success".$flag."</br>";
	}else{
		echo "token not match";
	}
	exit();
}
if(isset($_GET['reset']) && $_GET['reset'] == true){
	mt_srand(time());
	$rand = mt_rand();
	$_SESSION['token'] = sha1(md5($rand));
	//echo $_SESSION['token'];
	echo 'I send an email to your mailbox,Please check and input your token to reset your password';
	echo '<form action="" method="POST">
	<input type="text" name="token">
	<input type="submit" value="submit">
	</form>';
	exit();
}
echo '<a href="./token.php?reset=true">Reset Password</a>';
 -->