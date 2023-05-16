<meta charset="utf-8" />
<?php	
	session_start();
	include "DB.php";
	include "password.php";

	DB::getDB();
	
	if($_POST["userid"] == "" || $_POST["userpw"] == ""){
		echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
	}else{

	$userid = $_POST['userid'];
	$password = $_POST['userpw'];
    $result = DB::fetch("select * FROM member WHERE id = '$userid' AND pw = password('$password')");
	


	if($result != null) 
	{
		$_SESSION['user'] = $result;
		echo "<script>alert('로그인되었습니다.'); location.href='index.php';</script>";
		$loginyn = true;
	}else{
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}
}
?>