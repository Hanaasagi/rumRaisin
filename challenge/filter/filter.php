<?php
	//flag{boolean_blind_injection}
	error_reporting(0);
	include '../../conn.php';
	function nowtime(){
		$mtime=explode(' ',microtime());
		return $mtime[1]+$mtime[0];
	}

	function ban(){
		$lastime = $_SESSION['lastime'];
		$nowtime = nowtime();
		$_SESSION['lastime'] = nowtime();
		if($nowtime - $lastime <= 0.3){
			return true;
		}else{
			return false;
		}
	}

	function detect(){
		// file_get_contents("php://input")	//Get the POST Data 
		$re = array('and','or','count','select','from','union','group','by','limit','insert','where','order','alter','delete','having','max','min','avg','sum','sqrt','rand','concat','sleep');
		$pattern = '/'.implode('|', $re).'/';    
		$query = $_SERVER['QUERY_STRING'];
		$query = strtolower($query);
		$query = urldecode($query);
		return preg_match($pattern, $query);
	}

	if(isset($_SESSION['lastime'])){
		if(ban()){
			header('HTTP/1.1 500 Internal Server Error'); 
			header("Connetion:close");
			exit();
		}
	}else{
		$_SESSION['lastime'] = nowtime();
	}

	if(detect()){
		header('HTTP/1.1 500 Internal Server Error'); 
		header("Connetion:close");
		exit();
	}

	//payload
	//?area=hangzhou' %26%26 (substr(load_file('D:/wamp/www/rumRaisin/challenge/filter/filter.php'),1,1)='<') %23
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="pull-right">
				<h4>Online Student Management System</h4>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>
					<a href="./filter.php?area=nanjing">nanjing</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="./filter.php?area=suzhou">suzhou</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="./filter.php?area=hangzhou">hangzhou</a> <span class="divider">/</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<table class="table">
				<thead>
					<tr>
						<th>
							id
						</th>
						<th>
							name
						</th>
						<th>
							sex
						</th>
						<th>
							age
						</th>
						<th>
							telphone
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$area = isset($_GET['area']) ? $_GET['area'] : 'hangzhou';
					$conn = connect();
					$sql = "select `id`,`name`,`sex`,`age`,`telphone` from `student` where area = '{$area}'";
					$result = mysqli_query($conn,$sql);
					while($arr = mysqli_fetch_array($result)){
						$arr['sex'] = $arr['sex'] == 'f' ? 'female' : 'male';
						echo "  
						<tr class=\"info\">
							<td>
								{$arr['id']}
							</td>
							<td>
								{$arr['name']}
							</td>
							<td>
								{$arr['sex']}
							</td>
							<td>
								{$arr['age']}
							</td>
							<td>
								{$arr['telphone']}
							</td>
						</tr>
							";
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--
0x01 flag is in source
0x02 ban following words:
('and','or','count','select','from','union','group','by','limit','insert','where','order','alter','delete','having','max','min','avg','sum','sqrt','rand','concat','sleep')
 -->
</body>
</html>