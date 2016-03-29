<?php
	//payload aaO8zKZF
	$flag = "flag{conllision_is_so_difficult}";
	$key = "aa3OFF9m";
	$pass = isset($_GET['pass']) ? $_GET['pass'] : "";
	if ($pass != $key && sha1($pass)==sha1($key) ) {
		echo $flag;
	} else {
		echo "sha1 conllision, Can you do it";
	}
?>
<!-- 
$key = "aa3OFF9m";
$pass = isset($_GET['pass']) ? $_GET['pass'] : "";
if ($pass != $key && sha1($pass)==sha1($key) ) {
	echo $flag;
} else {
	echo "sha1 conllision</br>";
} -->