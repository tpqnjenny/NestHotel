<?
  session_start();
?>
<meta charset="utf-8">
<?
  $id = $_GET['id'];
  if(!$id){
    echo("아이디를 입력하세요.");
  } else{
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');
    $sql = "select * from join_nesthotel where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $num_record = mysqli_num_rows($result);
    if($num_record){
      echo "아이디가 중복됩니다!<br>다른 아이디를 입력해 주세요.<br>";
    } else{
      echo "사용 가능한 아이디입니다.";
    }
    mysqli_close($connect);
  }
?>