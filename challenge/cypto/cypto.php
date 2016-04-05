<?php
	function encrypt($string, $key='#usic_forever#'){
		$result = null;
		for($i=strlen($string)-1; $i>=0; $i--){
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result.=$char;
		}
		$result = base64_encode($result);
		$result = str_replace(array('+','/','='), array('-','_',''), $result);
		return $result;
	}


	function decrypt($string, $key='#usic_forever#'){
		$result = null;
		$data = str_replace(array('-','_'), array('+','/'), $string);
		$mod4 = strlen($data) % 4;
		if($mod4){
			$data.=substr('====',$mod4);
		}
		$string = base64_decode($data);
		for($i=0;$i<strlen($string);$i++){
			$char = substr($string, $i, 1);
			$keychar = substr($key,((strlen($string)-$i-1) % strlen($key))-1, 1);
			$char = chr(ord($char) - ord($keychar));
			$result= $char.$result;
		}
		return $result;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>cypto</title>
	<meta charset="utf-8">
</head>
<body>
<pre>
function encrypt($string, $key='#usic_forever#'){
	$result = null;
	for($i=strlen($string)-1; $i>=0; $i--){
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)+ord($keychar));
		$result.=$char;
	}
	$result = base64_encode($result);
	$result = str_replace(array('+','/','='), array('-','_',''), $result);
	return $result;
}
</pre>
<h3>oLmVusTh49bYpuTa1o-J</h3>
</body>
</html>
