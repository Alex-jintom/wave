<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>K-board 메인 페이지</title>
</head>
<body>
    <div id="board_area">
        <h1>공지사항</h1>
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>
            <?php
            // notice 테이블에서 idx를 기준으로 내림차순해서 2개까지 표시
            $sql = mq("select * from notice order by idx desc limit 0,2");
            while ($board = $sql->fetch_array()) {
                //title변수에 DB에서 가져온 title을 선택
                $title = $board["title"];
                // 게시글 타이틀이 길면 생략 부호(...) 표시
                $title = strlen($title) > 30 ? substr($title, 0, 30) . "..." : $title;
            ?>
                <tbody>
                    <tr>
                        <td width="70"><?php echo $board['idx']; ?></td>
                        <td width="500"><a href="read.php?board_id=notice&idx=<?php echo $board["idx"]; ?>"><?php echo $title; ?></a></td>
                        <td width="120"><?php echo $board['name'] ?></td>
                        <td width="100"><?php echo $board['date'] ?></td>
                        <td width="100"><?php echo $board['hit']; ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>

        <br><br><br>

        <h1>자유게시판</h1>
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>
            <?php
            // board 테이블에서 idx를 기준으로 내림차순해서 3개까지 표시
            $sql = mq("select * from board order by hit desc limit 0,3");
            while ($board = $sql->fetch_array()) {
                //title변수에 DB에서 가져온 title을 선택
                $title = $board["title"];
                // 게시글 타이틀이 길면 생략 부호(...) 표시
                $title = strlen($title) > 30 ? substr($title, 0, 30) . "..." : $title;
            ?>
                <tbody>
                    <tr>
                        <td width="70"><?php echo $board['idx']; ?></td>
                        <td width="500"><a href="read.php?board_id=board&idx=<?php echo $board["idx"]; ?>"><?php echo $title; ?></a></td>
                        <td width="120"><?php echo $board['name'] ?></td>
                        <td width="100"><?php echo $board['date'] ?></td>
                        <td width="100"><?php echo $board['hit']; ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</body>
</html>
