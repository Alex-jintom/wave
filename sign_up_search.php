<?php
	include ('db_connect.php');

	$id = $_POST['id'];
	$name = $_POST['name'];
	$pw = $_POST['passw'];
	$date = date("Y-m-d");

	// 비밀번호 암호화
	$hashed_pw = password_hash($pw, PASSWORD_DEFAULT);

	$sql = mq("insert into user (id, name, pw, date) values ('$id', '$name', '$hashed_pw', '$date')");
	echo "
	<script>
		location.href='index.php';
	</script>";
?>
