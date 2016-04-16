<!DOCTYPE html>
<html>
<head>
	<title>rumRaisin</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/foundation.css">
	<!-- <link type="text/css" href="css/bootstrap-combined.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){       
			$("button").click(function(){
				$url = "./challenge/"+$(this).attr("value")+"/"+$(this).attr("value")+".php";
					window.open($url);
			});
		});
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-sm-12">
			<div class="header">
				<h4 class="text-muted">
					rumRaisin
				</h4>
			</div>
			<div class="jumbotron">
				<h2>
					Challenge
				</h2>
				<p class="lead pull-right">
					PHP black magic
				</p>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-sm-12">
			<button class="chal-button" value="careless"><p>careless</p></button>           
			<button class="chal-button" value="RAW_MD5"><p>RAW_MD5</p></button>
			<button class="chal-button" value="register"><p>register</p></button>
			<button class="chal-button" value="super"><p>super</p></button>
			<button class="chal-button" value="whyneed"><p>why need?</p></button>
			<button class="chal-button" value="morethan"><p>more than</p></button>
			<button class="chal-button" value="paradox"><p>paradox</p></button>
			<button class="chal-button" value="captcha"><p>captcha</p></button>
			<button class="chal-button" value="friend"><p>friend</p></button>
			<button class="chal-button" value="login"><p>login</p></button>
			<button class="chal-button" value="conllision"><p>conllision</p></button>
			<button class="chal-button" value="moe"><p>(・ˍ・*)</p></button>
			<button class="chal-button" value="download"><p>Download</p></button>
			<button class="chal-button" value="niconiconi"><p>niconiconi</p></button>
			<button class="chal-button" value="chaos"><p>chaos</p></button>
			<button class="chal-button" value="token"><p>token</p></button>
			<button class="chal-button" value="xml"><p>xml</p></button>
			<button class="chal-button" value="speed"><p>speed</p></button>
			<button class="chal-button" value="order"><p>order</p></button>
			<button class="chal-button" value="Account"><p>Account</p></button>
			<button class="chal-button" value="mailbox"><p>reset</p></button>
			<button class="chal-button" value="damnit"><p>damnit</p></button>
			<button class="chal-button" value="GBK"><p>GBK</p></button>
			<button class="chal-button" value="upload"><p>upload</p></button>
			<button class="chal-button" value="bypass"><p>bypass</p></button>
			<button class="chal-button" value="smile"><p>smile</p></button>
			<button class="chal-button" value="filter"><p>filter</p></button>
			<button class="chal-button" value="include"><p>include</p></button>
			<button class="chal-button" value="cypto"><p>cypto</p></button>
			<button class="chal-button" value="evil"><p>evil</p></button>
			<button class="chal-button" value="Octocat"><p>Octocat</p></button>
			<button class="chal-button" value="injection"><p>injection</p></button>
		</div>
	</div>
</div>
</body>
</html>