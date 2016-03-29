<?php
	function connect(){
		include 'config';
    	$conn = mysqli_connect($DBADDRESS, $DBUSER, $DBPASS);
    	mysqli_query($conn,"set names utf8");
    	mysqli_select_db($conn,"rumRaisin");
    	return $conn;
    }
?>