<?php
	session_start();
	$vcode = rand(1000,9999);
	$_SESSION['vcode'] = $vcode;
	echo $vcode;
?>