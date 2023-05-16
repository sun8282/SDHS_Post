<?php
include "require.php";
if(!ss()){
    echo "<script>alert('로그인 후 이용해주세요.'); history.back();</script>";
} 
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
       
            <div class="createform">
                <form action="created.php" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                     
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                        
                    </div>
                    
                    <button action="created.php" type="submit" class ="btn" style ="width :200px; height:50px; background :#000; color:#FFF; cursor:pointer;">글 작성</button>
                   
                </form>
                <form name="reqform" method="post" action="imgupload.php" enctype="multipart/form-data">
                            <input class ="upload" type="file" name="upload_file"/>
                            <input type="submit" value ="이미지 업로드"/>
                </form>
            </div>
        </div>
</body>
<script src="./js/common.js"></script>
</html>