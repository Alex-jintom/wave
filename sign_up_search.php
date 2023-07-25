<?
  include ('db_connect.php');
  $id = $_POST['id'];
  $name = $_POST['name'];
  $pw = $_POST['passw'];
  $date=date("Y-m-d");
  $sql = mq("insert into user (id, name, pw, date) values ('".$id."','".$nic."','".$pw."','".$date."')");
  echo "
  <script>
    location.href='index.php'
  </script>";
?>
