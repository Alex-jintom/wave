<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>K-board 로그인</title>
  <style>
    * {margin: 0; padding: 0;}
    #login_box{
      width: 400px;
      height: 150px;
      border: solid 2px gray;
      position: absolute;
      left: 50%; top: 50%;
      margin-left: -200px;
      margin-top: -100px;
      background-color: orange;
    }
    .submit{
      width: 80px;
      height: 70px;
      border-radius: 5px;
      position: absolute;
      left: 50%; top: 50%;
      margin-left: 80px;
      margin-top: -60px;
    }
    a{
      color: black;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div id="login_box">
    <form name="loginForm" action="login_search.php" method="post" onsubmit="return validateForm()">
      <table width="300" height="100" border="0">
        <tr>
          <th align="right">아 이 디 :</th>
          <td><input type="text" name="userid" required></td>
        </tr>
        <tr>
          <th align="right">패스워드 :</th>
          <td><input type="password" name="userpw" required></td>
        </tr>
      </table>
      <input type="submit" class="submit" value="로그인">
      <p align=center>
        <a href="sign_up.php">회원가입</a> |
        <a href="#">비밀번호 찾기</a>
      </p>
    </form>
  </div>

  <script>
    function validateForm() {
      var userid = document.forms["loginForm"]["userid"].value;
      var userpw = document.forms["loginForm"]["userpw"].value;
      if (userid == "" || userpw == "") {
        alert("아이디와 패스워드를 모두 입력해주세요.");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
