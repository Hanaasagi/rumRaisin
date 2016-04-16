<?php
	function connect(){
		include 'config';
    	$conn = mysqli_connect($DBADDRESS, $DBUSER, $DBPASS);
    	mysqli_query($conn,"set names utf8");
    	return $conn;
    }
	$conn = connect();
	mysqli_query($conn,"create database rumRaisin");
	mysqli_select_db($conn,"rumRaisin");
	$arr = array("create table RAW_MD5( `flag` varchar(16) not null, `password` varchar(16) not null)",
				"create table IsNumber( `id` int not null, `content` varchar(32) not null, `flag` varchar(32) not null)",
				"insert into IsNumber (`id`,`content`,`flag`) value (1,'sorry no content','flag{yigeshabi}')",
				"create table login( `username` varchar(16) not null, `password` varchar(32) not null, `flag` varchar(32) not null);",
				"insert into login (`username`,`password`,`flag`) values ('^a5nof','054d8b1368b954101940a9f54926b794','flag{fuck_inj3ction}')",
				"create table Account( `uid` int not null primary key, `username` varchar(32) not null, `password` varchar(32) not null, `flag` varchar(32))",
				"insert into Account (`u2id`,`username`,`password`,`flag`) values ('100001','admin','4059cc1ae348ea37ad0ab4d410635ed2','flag{random_is_unique}')",
				"insert into Account (`uid`,`username`,`password`) values ('100002','neko','e10adc3949ba59abbe56e057f20f883e')",
				"create table `order`( `id` int not null primary key, `uid` int not null, `name` varchar(32) not null,`price` decimal(6,2) not null,`number` int not null,`status` int not null)",
				"insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10056','10001','python codebook','74.5','1','0')",
				"insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10086','10001','python core programming','65.7','1','0')",
				"insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10092','10002','python core programming','65.7','1','0')",
				"insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10097','10002','C Primer Plus','54.3','1','0')",
				"insert into `order`(`id`,`uid`,`name`,`price`,`number`,`status`) values ('10108','10002','python codebook','74.5','1','0')",
				"create table goods( `cid` int not null primary key, `name` varchar(64) not null, `price` decimal(6,2) not null)",
				"create table users(`uid` varchar(16) not null, `username` varchar(16) not null, `password` varchar(32) not null)",
				"insert into users(`uid`,`username`,`password`) values ('18632947','flag{second_level}','5ca3adca8bb7c4da34f72d3c7130b807')",
				"create table article(`id` int not null,`content` varchar(64) not null)",
				"insert into article(`id`,`content`) values ('1','ruby is a magic language')",
				"insert into article(`id`,`content`) values ('6321540','flag{python_is_a_little_girl}')",
				"create table student( `id` int not null primary key,`name` varchar(32) not null,`area` varchar(32) not null,`sex` enum('m','f') not null,`age` int not null,`telphone` varchar(11) not null)",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1056','weiss','nanjing','f','17','13869855638')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1057','John','nanjing','m','18','13605896038')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1059','ruby','nanjing','f','16','13758606312')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1060','nora','nanjing','f','18','13969651237')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1063','nikos','nanjing','f','30','15638765021')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1068','jaune','nanjing','m','19','13867086627')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1072','alisa','suzhou','f','17','13680769672')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1085','doris','suzhou','f','16','13709268821')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1086','michael','suzhou','m','20','13720593756')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1092','alina','hangzhou','f','18','18630296552')",
				"insert into student(`id`,`name`,`area`,`sex`,`age`,`telphone`) values ('1096','doris','hangzhou','f','22','18697281205')",
				"create table injection( `key1` varchar(32) not null, `key2` varchar(32) not null)",
				"insert into injection(`key1`,`key2`) values ('39e66f4f7f6b8ea829fd301297b6fbff','a7dba1ef4d170c914199f44775549f85')"
			);
	for($i=0;$i<count($arr);$i++){
		mysqli_query($conn,$arr[$i]);
	}
?>
