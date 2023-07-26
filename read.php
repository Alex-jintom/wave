<?php
	include ('db_connect.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <style>
        /* CSS 코드 생략 */
    </style>
</head>
<body>
	<?php
    $board_id = $_GET['board_id'];
		$bno = $_GET['idx'];

		$hit = mysqli_fetch_array(mq("select * from ".$board_id." where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update ".$board_id." set hit = '".$hit."' where idx = '".$bno."'");

		$sql = mq("select * from ".$board_id." where idx='".$bno."'");
		$board = $sql->fetch_array();
	?>
    <!-- 글 불러오기 -->
    <div id="board_read">
        <!-- 코드 생략 -->
    </div>

    <!-- 댓글 불러오기 -->
    <div class="reply_view">
        <h3>댓글목록</h3>
        <?php
            $sql3 = mq("select * from ".$board_id."_reply where con_num='".$bno."' order by idx desc");
            while($reply = $sql3->fetch_array()){
        ?>
        <div class="dap_lo">
            <div><b><?php echo $reply['name'];?></b></div>
            <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
            <div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
        </div>
        <?php } ?>

        <!-- 댓글 입력 폼 -->
        <div class="dap_ins">
            <form action="reply_ok.php?board_id=<?php echo $board_id; ?>&idx=<?php echo $bno; ?>" method="post">
                <input type="hidden" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디" value="<?php echo $_SESSION['userid']; ?>">
                <div style="margin-top:10px;">
                    <textarea name="content" class="reply_content" id="re_content" required></textarea>
                    <button id="rep_bt" class="re_bt">댓글</button>
                </div>
            </form>
        </div>
    </div>
    <div id="foot_box"></div>
</body>
</html>
