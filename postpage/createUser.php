<?php
include "DB.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 폼</title>
</head>
<link rel="stylesheet" href="./create.css">
<body>
	<form method="post" action="member.php">
        <h1>회원가입 폼</h1>
			<fieldset>
            
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="name" placeholder="이름"></td>
						</tr>
						<tr>
							<td>성별</td>
							<td>남<input type="radio" name="sex" value="남" class ="sexradio"> 여<input type="radio" name="sex" value="여" class ="sexradio"></td>
						</tr>
						<tr>
							<td>이메일</td>
							<td><input type="text" name="email">
							
						</tr>
					</table>

				
                <input type="submit" value="가입하기" class ="btn"/>
                <input type="reset" value="다시쓰기"class ="btn" />
			
		</fieldset>
	</form>
</body>
</html>