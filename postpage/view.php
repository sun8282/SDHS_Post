<?php
include "DB.php";
 $idx = $_GET["idx"];


 $sql = DB::fetch("select * from posts where idx = '$idx'");
 DB::exec("UPDATE posts SET views = views + 1 WHERE idx ='$idx'");
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
        <div class="viewbox">
            <div class="title"> 
                <div class="titletext"><?php print_r($sql->title); ?></div>
                <div class="useranddate"><?php print_r($sql->userid); ?> | <?php print_r($sql->date); ?></div>
            </div>
            <div class="viewsandlikes">조회수 :<?php print_r($sql->views); ?></div>
            <div class="text">
                <?php print_r($sql->text); ?>
            </div>
        </div>
    </div>
</body>
</html>