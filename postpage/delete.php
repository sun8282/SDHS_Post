<?php
include "require.php";
$idx = $_GET["idx"];
 DB::exec("DELETE FROM posts WHERE idx ='$idx'");
 echo "<script>alert('삭제 되었습니다.'); location.href='write.php';</script>";
?>