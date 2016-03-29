<?php
	$file = isset($_GET['file']) ? $_GET['file'] : "";
	$file = preg_replace('/download\.php/','',strtolower($file));
	if($file != ""){
		if($file === "download.php" && file_exists($file)){
			header('Content-Type:text/plain'); 
			header('Content-Disposition: attachment; filename="'.$file.'"'); 
			header('Content-Length:'.filesize($file)); 
			readfile($file);
		}
	}

	// What is this ? it's a key 
	//ZmxhZ3t3aGl0ZWxpc3RfaXNfc2FmZX0
?>
Can you download me ?  :) 
<!-- 
$file = preg_replace('/download\.php/','',strtolower($file));
	if($file != ""){
		if($file === "download.php" && file_exists($file)){
			header('Content-Type:text/plain'); 
			header('Content-Disposition: attachment; filename="'.$file.'"'); 
			header('Content-Length:'.filesize($file)); 
			readfile($file);
		}
	}
 -->