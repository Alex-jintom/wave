<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$db = new mysqli("localhost", "root", "", "jin");
if ($db->connect_errno) {
    die("데이터베이스 연결 오류: " . $db->connect_error);
}

$db->set_charset("utf8");

function mq($sql)
{
    global $db;
    $result = $db->query($sql);
    if (!$result) {
        die("쿼리 실행 오류: " . $db->error);
    }
    return $result;
}
?>