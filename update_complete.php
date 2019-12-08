

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');
if(mysqli_connect_error()) {
  die('データベースの接続に失敗しました。');
}

$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$record_date = date("Y/m/d");

$sql = "UPDATE `article` SET `title` = '$title', `body` = '$body', `record_date` = '$record_date' WHERE `id` = '$id';";

if(!$result = mysqli_query($link, $sql)) {
  die('クエリの発行に失敗しました。');
} else {
  echo '<h1>更新が完了しました。</h1>';
}



?>


<script type="text/javascript">
  function autolink() {
    location.href="/wordpress_copy/list.php"
  }
  setTimeout(autolink, 5000)

</script>