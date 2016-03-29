<?php
	date_default_timezone_set('Asia/Shanghai');
	$i = 0;
	while($i++<10){
		mt_srand(time());
		$rand = mt_rand();
		$key = sha1(md5($rand));
		echo $key."\n";
		sleep(1);
	}


?>
