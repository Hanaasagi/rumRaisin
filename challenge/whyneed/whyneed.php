<?php
	$flag = "flag{ilibilib#}";
	if(isset($_GET['pass'])){
		if(preg_match('/#bilibili/',$_GET['pass'])){
		  	echo("<p>not allowed!</p>");
		  	exit();
		}
		$pass = urldecode($_GET['pass']);
		if($pass === "#bilibili"){
			echo '<h3>'.$flag.'</h3>';
		}
	}
?>
<!-- 
if(isset($_GET['pass'])){
	if(preg_match('/#bilibili/',$_GET['pass'])){
	  	echo("<p>not allowed!</p>");
	  	exit();
	}
	$pass = urldecode($_GET['pass']);
	if($pass === "#bilibili"){
		echo '<h3>'.$flag.'</h3>';
	}
}
 -->