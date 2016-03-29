<?php 
	error_reporting(0);
	include "../../conn.php";
	$conn = connect();
	if(isset($_GET['pass'])){
		$password = $_GET['pass'];
		$sql = "select `flag` from RAW_MD5 where password ='".md5($password,true)."'";
		$result=mysqli_query($conn,$sql);
		$arr = mysqli_fetch_array($result);
		echo $arr['flag'];
		mysqli_close($conn);
	}else{
		show_source(__FILE__);    
	}
?>
