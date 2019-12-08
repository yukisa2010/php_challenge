

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');
if(mysqli_connect_error()) {
  die('データベースの接続に失敗しました。');
}

var_dump($_GET);
$id = $_GET['id'];
$sql = "DELETE FROM `article` WHERE `id` = '$id';";

if(!$result = mysqli_query($link, $sql)) {
  die('クエリの発行に失敗しました。');
} else {
  echo '<h1>削除が完了しました。</h1>';
}

?>

<script type="text/javascript">
  function autolink() {
    location.href="/wordpress_copy/list.php"
  }
  setTimeout(autolink, 5000)

</script>