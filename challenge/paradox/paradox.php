<!DOCTYPE html>
<html>
<head>
</head>
<body>
<pre>
if (isset($_GET['a']) && isset($_GET['b'])) {
	if ($_GET['a'] !== $_GET['b']){
		if (sha1($_GET['a']) === sha1($_GET['b']))
			echo $flag;
		else
			print 'Wrong.';
	}
}
</pre>
</body>
</html>
<?php
	error_reporting(0);
	$flag = 'flag{just_a_joke23333}';
	if (isset($_GET['a']) && isset($_GET['b'])) {
		if ($_GET['a'] !== $_GET['b']){
			if (sha1($_GET['a']) === sha1($_GET['b']))
				echo $flag;
			else
				print 'Wrong.';
		}
	}
?>