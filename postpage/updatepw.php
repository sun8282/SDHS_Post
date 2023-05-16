<?php
include "require.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <h1 class ="pagetitle" style ="margin-top: 30px;"><a href="index.php">디지텍 POST</a></h1>
    <div class="list">
        
        <form method="post" action="pwupdate_ok.php">
        <h1>비밀번호 변경</h1>
			<fieldset>
            
				
					<table>
						
						<tr>
							<td>기존 비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
                        <tr>
							<td>새 비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
                        <tr>
							<td>비밀번호 확인</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
						
					</table>

				
                <input type="submit" value="변경하기" class ="btn"/>
                <input type="reset" value="다시쓰기"class ="btn" />
			
		</fieldset>
    </div>
</div>
</body>
</html>