<?php
	//payload key1=' or 1=1 GROUP BY key2 WITH ROLLUP LIMIT 1 OFFSET 1#&key2=
	error_reporting(0);

	include "../../conn.php";
	$flag = "flag{you_are_great_hacker}";
	function AttackFilter($str){
		if(is_array($str)){
			$str = implode($str);
		}
		
		if(preg_match("/union|select|from|where|join|sleep|benchmark|,|\(|\)/is", $str)){
			print 'dangerous query';
			exit();
		}
	}
	
	$conn = connect();
	foreach($_POST as $key=>$value){
		AttackFilter($value);
	}
	$sql = "select * from injection where key1 = '{$_POST['key1']}'";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 1){
		$key = mysqli_fetch_array($query);
		if($key['key2'] == $_POST['key2']){
			echo $flag;
		}else{
			echo "key1 and key2 are not equal";
		}
	}else{
		echo "key1 is not correct";
	}
?>
<!-- 
function AttackFilter($str){
	if(is_array($str)){
		$str = implode($str);
	}
	
	if(preg_match("/union|select|from|where|join|sleep|benchmark|,|\(|\)/is", $str)){
		print 'dangerous query';
		exit();
	}
}

$conn = connect();
foreach($_POST as $key=>$value){
	AttackFilter($value);
}

$sql = "select * from injection where key1 = '{$_POST['key1']}'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 1){
	$key = mysqli_fetch_array($query);
	if($key['key2'] == $_POST['key2']){
		echo $flag;
	}else{
		echo "key1 and key2 are not equal";
	}
}else{
	echo "key1 is not correct";
} 
-->
