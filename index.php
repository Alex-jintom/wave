<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>K-board 입니다.</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style>
    /* 스타일 내용은 이제 이곳에 기재하지 않습니다. 모두 style.css 파일에 작성합니다. */
    </style>
</head>
<body>
    <header align="center">
        <h1>
            <a href="index.php">K-board</a>
        </h1>
    </header>

    <?php
    if (isset($_SESSION['userid'])) {
        echo "<nav align='right'>
            안녕하세요 ".$_SESSION['user_nic']."님&nbsp&nbsp&nbsp
            <a href='logout.php'>로그아웃</a>
            <a target='iframe1' href='my_page.php'>마이페이지</a>
        </nav>";
    } else {
        ?>
        <nav align='right'>
            <a href="login.php">로그인</a>
            <a href="sign_up.php">회원가입</a>
        </nav>
        <?php
    }
    ?>

    <aside id="left">
        <!-- (카테고리 메뉴 내용은 동일하게 유지) -->
    </aside>

    <section id="main">
        <article id="article1">
            <iframe name="iframe1" src="main.php" width="1000px" height="700px" seamless></iframe>
        </article>
    </section>

    <footer>
        Copyright (c) 2020 k_board
    </footer>
</body>
</html>
