<?php
// include "DB.php";
include "require.php";
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
$userid = ss()->id;
if(trim($title) != "" && trim($content) != ""){
    $sql = DB::exec("INSERT INTO `posts`(`userid`,`title`, `text`, `date`) VALUES ('$userid','$title','$content','$date')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
