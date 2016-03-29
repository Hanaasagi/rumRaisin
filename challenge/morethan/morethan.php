<!DOCTYPE html>
<html>
<head>
</head>
<body>
<pre>
if (isset($_GET['num'])) {
	$num = $_GET['num'];
	if (is_numeric($num)){
		if (strlen($_GET['num']) < 5){
			if ($_GET['num'] > 9999){
				echo $flag;
			}else{
				print 'Too little';
			}
		} else
				print 'Too long';
	}else{
		print 'must be a number';
	}
}
</pre>
</body>
</html>
<?php
	$flag = 'flag{Hex_is_not_solution}';
	if (isset($_GET['num'])) {
		$num = $_GET['num'];
		if (is_numeric($num)){
			if (strlen($_GET['num']) < 5){
				if ($_GET['num'] > 9999){
					echo $flag;
				}else{
					print 'Too little';
				}
			} else
					print 'Too long';
		}else{
			print 'must be a number';
		}
	}
?>