<?php
session_start();


unset($_SESSION['user']);

echo '<script>
    alert("로그아웃되었습니다.");
    location.href = "/";
</script>';