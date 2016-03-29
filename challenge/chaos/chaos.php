<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$flag= "flag{life_is_short_not_double}";
	if(isset($_GET['num'])){
		$num = $_GET['num'];
		if(!is_numeric($num)){
			echo "must be a number!";
			exit();
		}
		if(intval($num) != intval(strrev($num))){
			echo "must be palindrome";
			exit();
		}
		if($num[0] != $num[strlen($num)-1]){
			echo $flag;
		}else{
			echo "I told a joke";
		}
	}else{
		echo '
<pre>
if(isset($_GET["$num"])){
	$num == $_GET["$num"];
	if(!is_numeric($num){
		echo "must be a number!";
		exit();
	}
	if(intval($num) != intval(strrev($num))){
		echo "must be palindrome";
		exit();
	}
	if($num[0] != $num[strlen($num)-1]){
		echo $flag;
	}
}
</pre>';
	}
?>
</body>
</html>
