<?php 
	session_start();
	$flag = "flag{balabalabala}";
	if(isset($_POST['vcode']) && isset($_SESSION['vcode'])){
		if($_POST['vcode'] == $_SESSION['vcode']){
			if($_POST['username'] != '13869271563'){
				echo 'Please login as 13869271563</br>';
			}else{
				echo $flag;
			}
		}else{
			echo 'Your Vcode is wrong';
		}
	}else{
		echo '<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="../../js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){      
				$(".getcode").click(function(){
					var url="./vcode.php";

					$.post(url,{\'getcode\':\'1\',\'mobi\':$("#username").val()},function(data){
						alert("Vcode："+data);
					});
				});
			});
		</script>
	</head>
	<body>
		Use your mobile phone to get the Vcode and login.</br>
		Your phone number is 13366666666.
		<form action="Account.php" method="POST">
			Phone: <input type="text" value="13366666666" name="username" id="username"><br>
			Vcode: <input type="text" value="" name="vcode"><br>
			<a href="#" class="getcode">Get the Vcode</a>
			<input type="submit" value="submit" name="Login"><br>
		</form>
	</body>
</html>';
	}
	$_SESSION['vcode'] = rand(1000,9999);

 ?>