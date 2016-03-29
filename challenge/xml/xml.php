<!DOCTYPE html>
<html>
<head>
	<title>Do you konw xml</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	//payload ']| //*|a['
	if( !isset($_GET['uid']) ){
		echo 'uid=100001';
	}elseif(file_exists('user.xml')) {
		$uid = $_GET['uid'];
		$xml = simplexml_load_file('user.xml');
		$query = "user/username[@id='".$uid."']";
		$result = $xml->xpath($query);
		if(!$result){     
			echo "<h2>user not found</h2>";
		}else{
			foreach($result as $index => $value) {
				echo "<h2>Hello {$value}</h2>";
			 }
		}
	}
	
	// $re = array('and','or','count','select','from','union','group','by','limit','insert','where','order','alter','delete','having','max','min','avg','sum','sqrt','rand','concat','sleep');
	// $uid = str_replace($re, ' ', $uid);
?>
<!-- tips:
KCNGUVAWRPGVBA
 -->
</body>
</html>
