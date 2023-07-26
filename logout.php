<?php
session_start();

// 세션 해제
unset($_SESSION['userid']);

// 로그아웃 후 메인 페이지로 리다이렉션
header("Location: index.php");
exit;
?>
