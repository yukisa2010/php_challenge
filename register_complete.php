

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');
if(mysqli_connect_error()) {
  die('データベースの接続に失敗しました。');
}

$title = $_POST['title'];
$body = $_POST['body'];
$record_date = date("Y/m/d");

$sql = "INSERT INTO `article` (`title`, `body`, `record_date`) VALUES ('$title','$body','$record_date');";

if(!$result = mysqli_query($link, $sql)) {
  die('クエリの発行に失敗しました。');
} else {
  echo '<h1>登録が完了しました。</h1>';
}

?>


<script type="text/javascript">
  function autolink() {
    location.href="/wordpress_copy/list.php"
  }
  setTimeout(autolink, 5000)

</script>