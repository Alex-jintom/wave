<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>회원가입</title>
  <style media="screen">
    /* CSS 스타일 수정 */
    * {margin: 0; padding: 0;}
    #sign_up_box {
      width: 400px;
      height: 150px;
      border: solid 2px gray;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -200px;
      margin-top: -100px;
      background-color: orange;
    }
    #sign_up_button {
      position: absolute;
      left: 40%;
      top: 80%;
    }
  </style>
  <script>
    /* JavaScript 함수들은 그대로 사용합니다. */
    // ...
  </script>
</head>
<body>
  <div id="sign_up_box">
    <form action="sign_up_search.php" method="post" id="sign">
      <table>
        <tr>
          <td>아이디</td>
          <td>
            <input type="text" name="id" id="uid">
          </td>
          <td>
            <button type="button" name="button" onclick="check_id()">중복확인</button>
            <input type="hidden" id="id_ch" name="" value="0">
          </td>
        </tr>
        <tr>
          <td>닉네임</td>
          <td>
            <input type="text" name="name" id="nic">
          </td>
          <td>
            <button type="button" name="button" onclick="check_nik()">중복확인</button>
            <input type="hidden" id="nik_ch" name="" value="0">
          </td>
        </tr>
        <tr>
          <td>비밀번호</td>
          <td>
            <input type="password" id="pw" name="passw">
          </td>
        </tr>
        <tr>
          <td>비밀번호 확인</td>
          <td>
            <input type="password" id="pw_ck" name="pass_check">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <button id="sign_up_button" type="button" name="button" align="right" onclick="passwordCheck()">회원가입</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
