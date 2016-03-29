<?php
	error_reporting(0);
	$flag = "flag{pay_attention_to_some_func}";
	if(isset($_GET['pass'])){
		$pass = $_GET['pass'];
		if(!strcmp($pass,$flag)){
			echo $flag;
		}else{
			echo "the pass is wrong!";
		}
	}else{
		echo "please input pass!";
	}
?>
<!-- 
error_reporting(0);
if(isset($_GET['pass'])){
	$pass = $_GET['pass'];
	if(!strcmp($pass,$flag)){
		echo $flag;
	}else{
		echo "the pass is wrong!";
	}
	}else{
		echo "please input pass!";
	}
}
-->