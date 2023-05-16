<?php
include "require.php";
 

 $idx = $_GET["idx"];
 $sql = DB::fetch("select * from posts where idx = '$idx'");
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
                <form action="update_ok.php" method="get">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?= $sql-> title ?></textarea>
                    </div>
                     
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?= $sql-> text ?></textarea>
                    </div>
                    <input type="hidden" name="idx" value= <?=$idx?>>
                    <button type="submit" class ="btn" style ="width :200px; height:50px; background :#000; color:#FFF; cursor:pointer;">수정 완료</button>
                   
                </form>
            </divc>
        </div>
</body>
<script src="./js/common.js"></script>
</html>