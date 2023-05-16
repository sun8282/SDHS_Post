<?php
    include "require.php";
?>

<!DOCTYPE html>
<html lang="ko">
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
       <h1>프로필</h1>
       <h3>아이디 : <?= ss()->id ?></h3>
       <h3>회원 이름 : <?= ss()->name ?></h3>
       <h3>이메일 : <?= ss()->email ?></h3>
       <h3>성별 : <?= ss()->sex ?></h3>
        <a href="updatepw.php"><button>비밀번호 수정</button></a>
    </div>
    </div>
</body>
</html>