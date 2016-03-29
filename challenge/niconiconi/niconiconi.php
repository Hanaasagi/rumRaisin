<?php
	function niconiconi($number){
		$one = ord('1');
		$nine = ord('9');
		for ($i = 0; $i < strlen($number); $i++){
			$digit = ord($number{$i});
			if ( ($digit >= $one) && ($digit <= $nine) ){
				return false;
			}
		}
		return $number == '64138178286';
	}
	$flag="flag{l0ve_l1ve}";
	if(niconiconi(@$_GET['key'])){
		echo $flag;
	}else{
		echo 'access denied';
	}
?>
<!--
 function niconiconi($number){
	$one = ord('1');
	$nine = ord('9');
	for ($i = 0; $i < strlen($number); $i++){
		$digit = ord($number{$i});
		if( ($digit >= $one) && ($digit <= $nine) ){
			return false;
		}
	}
		return $number == '64138178286';
}
if(niconiconi(@$_GET['key'])){
	echo $flag;
}else{
	echo 'access denied';
}
 -->