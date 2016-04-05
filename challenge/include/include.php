<?php
	//payload file=php://filter/convert.base64-encode/resource=flag.php
	if(isset($_GET['file'])){
		include($_GET['file']);
	}else{
		echo 'file = flag.php'.'</br>';
	}
	echo '<!-- include($_GET[\'file\'])-->';
?>