<?php
	include "DB.php";
	include "password.php";
	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];
	$username = $_POST['name'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];



	$sql= DB::exec("insert into member (id,pw,name,sex,email) values('$userid',password('$userpw'),'$username','$sex','$email')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">