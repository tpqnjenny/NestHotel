<?php
  session_start();

  $connect = mysqli_connect("localhost", "tpqnjenny97", "rladldud97!", "tpqnjenny97");
?>
<meta charset="utf-8">
<?php
  $id = $_POST['id'];
  $pw = $_POST['pw'];
  $name = $_POST['name'];
  $hp = $_POST['hp'];
  $email = $_POST['email'];

  include "dbconn.php";
  mysqli_query($connect, 'set names utf8');

  $sql = "select * from join_nesthotel where id='id'";
  $result = mysqli_query($connect, $sql);
  $exist_id = mysqli_num_rows($result);
  if($exist_id){
    echo("
      <script>
        window.alert('해당 아이디가 존재합니다.')
        history.go(-1)
      </script>
    ");
    exit;
  } else{
    $sql = "insert into join_nesthotel(id, pw, name, hp, email)";
    $sql .= "values ('$id', '$pw', '$name', '$hp', '$email')";
    mysqli_query($connect, $sql);
  }
  mysqli_close($connect);

  echo "
    <script>
      location.href = './login_form.php';
    </script>
  "
?>