<?php
	if(isset($_FILES["file"])){
		if (($_FILES["file"]["type"] == "image/jpeg") && ($_FILES["file"]["size"] < 20000)){
	  		if ($_FILES["file"]["error"] > 0){
	    			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    		}else{
			    	echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			    	echo "Type: " . $_FILES["file"]["type"] . "<br />";
			    	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			    	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	    		    	if (file_exists("upload/" . $_FILES["file"]["name"])){
	    		    		echo $_FILES["file"]["name"] . " already exists. ";
	      		}else{
				     move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
				     echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	      		}
	    		}
	  	}else{
	  		echo "Invalid file";
	  	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>rumRaisin</title>
	<meta charset="utf-8">
</head>
<body>
<h3>这个示例真的没有问题? (此题没有flag)</h3>
<h4>http://www.w3school.com.cn/php/php_file_upload.asp</h4>
<form action="" method="post" enctype ="multipart/form-data"> 
	<input name="file" type="file" /> 
	<input type="submit" value="submit" />
</form>
</body>
</html>