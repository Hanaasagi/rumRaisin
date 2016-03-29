<?php
	//payload ^.^=data://text/plain;charset=unicode,(●'◡'●)
	error_reporting(0);
	$flag = "flag{no_more_tears}";
	header("Content-type: text/html; charset=utf-8");
	$smile = 1;  
	if (!isset ($_GET['^_^'])) $smile = 0;  
	if (preg_match ('/\./', $_GET['^_^'])) $smile = 0;  
	if (preg_match ('/%/', $_GET['^_^'])) $smile = 0;  
	if (preg_match ('/[0-9]/', $_GET['^_^'])) $smile = 0;  
	if (preg_match ('/http/', $_GET['^_^']) ) $smile = 0;  
	if (preg_match ('/https/', $_GET['^_^']) ) $smile = 0;  
	if (preg_match ('/ftp/', $_GET['^_^'])) $smile = 0;  
	if (preg_match ('/telnet/', $_GET['^_^'])) $smile = 0;  
	if (preg_match ('/_/', $_SERVER['QUERY_STRING'])) $smile = 0; 
	if ($smile) { 
		if (@file_exists ($_GET['^_^'])) $smile = 0;  
	}  
	if ($smile) { 
		$smile = @file_get_contents($_GET['^_^']); 
		echo $smile;
		if ($smile === "(●'◡'●)") die($flag);  
	}  
?> 
War is an invention of the human mind. The human mind can also invent peace with justice.
<!-- 
header("Content-type: text/html; charset=utf-8");
$smile = 1;  
if (!isset ($_GET['^_^'])) $smile = 0;  
if (preg_match ('/\./', $_GET['^_^'])) $smile = 0;  
if (preg_match ('/%/', $_GET['^_^'])) $smile = 0;  
if (preg_match ('/[0-9]/', $_GET['^_^'])) $smile = 0;  
if (preg_match ('/http/', $_GET['^_^']) ) $smile = 0;  
if (preg_match ('/https/', $_GET['^_^']) ) $smile = 0;  
if (preg_match ('/ftp/', $_GET['^_^'])) $smile = 0;  
if (preg_match ('/telnet/', $_GET['^_^'])) $smile = 0;  
if (preg_match ('/_/', $_SERVER['QUERY_STRING'])) $smile = 0; 
if ($smile) { 
	if (@file_exists ($_GET['^_^'])) $smile = 0;  
}  
if ($smile) { 
	$smile = @file_get_contents ($_GET['^_^']); 
	if ($smile === "(●'◡'●)") die($flag);  
}  
 -->