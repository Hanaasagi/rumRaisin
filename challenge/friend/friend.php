<!DOCTYPE html>
<html>
<head>
	<title>friend</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$flag = "flag{tamper_refer_is_easy}";
	$friend = array("ruby"=>"http://192.168.2.85",
					"Weiss"=>"http://192.168.1.102",
					"Yang"=>"http://192.168.2.108",
					"Blake"=>"http://192.168.1.139");
	$refer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
	if(in_array($refer,$friend)){
		echo "<h3>hello my friend ".implode("",array_keys($friend,$refer))."</h3>";
		echo $flag;
	}else{
		echo "<h3> where are you from ? only my friend can visit me </h3>";
		foreach($friend as $name=>$address) {
			echo "<li><a href='".$address."'>".$name."</a></li>";
		  	echo "<br>";
		}
	}
?>
</body>
</html>