<?php
	error_reporting(0);
	session_start();
	$_SESSION['uid'] = 10002;
	$uid = $_SESSION['uid'];

	include "../../conn.php";
	$conn = connect();
	function resetDB($conn){
		$sql = "drop table `order`";
		mysqli_query($conn,$sql);
		$sql = "create table `order`( `id` int not null primary key, `uid` int not null, `name` varchar(32) not null,`price` decimal(6,2) not null,`number` int not null,`status` int not null)";
		mysqli_query($conn,$sql);
		// id uid name price number status
		$sql = "insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10056','10001','python codebook','74.5','1','0')";
		mysqli_query($conn,$sql);
		$sql = "insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10086','10001','python core programming','65.7','1','0')";
		mysqli_query($conn,$sql);
		$sql = "insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10092','10002','python core programming','65.7','1','0')";
		mysqli_query($conn,$sql);
		$sql = "insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10097','10002','C Primer Plus','54.3','1','0')";
		mysqli_query($conn,$sql);
		$sql = "insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10108','10002','python codebook','74.5','1','0')";
		mysqli_query($conn,$sql);
	}

	function delOrder($conn,$id){
		$sql = "delete from `order` where id = '{$id}'";
		mysqli_query($conn,$sql);
	}

	function check($conn){
		$sql = "select count(*) from `order` where uid = 10001";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($result);
		if($row[0]<2){
			return true;
		}else{
			return false;
		}
	}

	if(isset($_GET['reset']) && $_GET['reset'] == true){
		resetDB($conn);
	}
	if(isset($_GET['action']) && $_GET['action'] == 'del'){
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		$id = mysqli_escape_string($conn,$id);
		delOrder($conn,$id);
		if(check($conn)){
			echo "<h3>flag{check_the_permission}</h3>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>shopping cart</title>
	<meta charset="utf-8">
	<link type="text/css" href="../../css/bootstrap-combined.min.css" rel="stylesheet">
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){       
			$("button").click(function(){
				if($(this).attr("value") != ""){
					$url = "order.php?action=del&id="+$(this).attr("value");
					location.href = $url;
				}
			});
		});
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4 pull-right">
			<h3>Online Book Shop</h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<table class="table">
				<thead>
					<tr>
						<th>
							book name
						</th>
						<th>
							price
						</th>
						<th>
							number
						</th>
						<th>
							status
						</th>
						<th>
							
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$sql = "select `id`,`name`,`price`,`number`,`status` from `order` where uid =$uid";
					$result = mysqli_query($conn,$sql);
					while($arr = mysqli_fetch_array($result)){
						if($arr['status'] == 0){
							$arr['status'] = 'no';
						}else{
							$arr['status'] ='yes';
						}
					echo "	<tr class=\"info\">
							<td>
								{$arr['name']}
							</td>
							<td>
								{$arr['price']}
							</td>
							<td>
								{$arr['number']}
							</td>
							<td>
								{$arr['status']}
							</td>
							<td>
								<button value=\"\">Paynow</button>
								<button value=\"{$arr['id']}\">Cancel</button>
							</td>
						</tr>
						";
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
<!-- 
	use 'reset = true' to reset the database 
 -->
</div>
</body>
</html>
