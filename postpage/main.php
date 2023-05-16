<?php 
	include 'require.php';

	

	if(!ss()){
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	} 
	
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
</head>
<body>
	<h2><?=ss()->id?> 님 환영합니다.</h2>
	
</body>
</html>