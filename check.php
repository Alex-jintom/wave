<?php
include('db_connect.php');

if (isset($_GET["userid"])) {
    $uid = $_GET["userid"];
    $sql = mq("select * from user where id='" . $uid . "'");
    $member = $sql->fetch_array();
    if ($member == 0) {
        echo "<div style='font-family:\"malgun gothic\";'>{$uid}는 사용가능한 아이디입니다.</div>";
        echo "<button value='닫기' onclick='id_check()'>닫기</button>";
    } else {
        echo "<div style='font-family:\"malgun gothic\"; color:red;'>{$uid} 중복된 아이디입니다.</div>";
        echo "<button value='닫기' onclick='window.close()'>닫기</button>";
    }
} elseif (isset($_GET["usernic"])) {
    $uid = $_GET["usernic"];
    $sql = mq("select * from user where nic_name='" . $uid . "'");
    $member = $sql->fetch_array();
    if ($member == 0) {
        echo "<div style='font-family:\"malgun gothic\";'>{$uid}는 사용가능한 닉네임입니다.</div>";
        echo "<button value='닫기' onclick='nic_check()'>닫기</button>";
    } else {
        echo "<div style='font-family:\"malgun gothic\"; color:red;'>{$uid} 중복된 닉네임입니다.</div>";
        echo "<button value='닫기' onclick='window.close()'>닫기</button>";
    }
}
?>
<script>
function id_check() {
    opener.document.getElementById("id_ch").value = 1;
    window.close();
}
function nic_check() {
    opener.document.getElementById("nik_ch").value = 1;
    window.close();
}
</script>
