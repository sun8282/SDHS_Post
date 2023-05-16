<?php
// include "DB.php";
include "require.php";
// include "update.php";
$idx = $_GET["idx"];
$title = $_GET['title'];
$content = $_GET['content'];
if(trim($title) != "" && trim($content) != ""){
    DB::exec("UPDATE `posts` SET `title`='$title',`text`='$content'  WHERE `idx` ='$idx'");
    echo "<script>
    alert('수정 완료되었습니다.');
    location.href='/';</script>";
}else{
    echo "<script>
    alert('수정에 실패했습니다.');
    history.back();</script>";
}
?>