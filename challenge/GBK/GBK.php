<?php
	include '../../config';
	if(isset($_GET['id'])){
		$conn = mysqli_connect($DBADDRESS,$DBUSER,$DBPASS);
		mysqli_select_db($conn,'rumRaisin');
		mysqli_query($conn,"SET NAMES 'GBK'");
		$id = addslashes($_GET['id']);
		$sql = "select content from article where id ='$id'";
		$result = mysqli_query($conn,$sql);
		while($arr = mysqli_fetch_array($result)){
			echo $arr['content'].'</br>';
		}
		mysqli_close($conn);
	}
?>
<!-- 
id = 1
 -->