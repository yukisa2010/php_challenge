<style>
  label {
    font-weight: bold;
  }

  input[type="text"] {
    width: 400px;
  }
  textarea {
    width: 400px;
    height: 300px;
  }
  .flex {
    display: flex;
    flex-direction: column;
  }

</style>
<?php
echo var_dump($_GET);
if($_GET) {
  $link = mysqli_connect('localhost', 'root', 'root', 'mysql');
  if(mysqli_connect_error()) {
    die('データベースの接続に失敗しました。');
  }
  
  $sql = "SELECT * FROM `article` WHERE `id` = ".$_GET['id'].";";
  
  if(!$result = mysqli_query($link, $sql)) {
    die('クエリの発行に失敗しました。');  
  }
  $row = mysqli_fetch_array($result);
  $id = $_GET['id'];
  $title = $row['title'];
  $body = $row['body'];

  echo '
      <h1>編集画面</h1>
      <form method="POST">
        <div class="flex">
          <input type="hidden" name="id" value="'.$id.'"/>
          <label for="title">title</label>
          <input type="text" name="title" value='.$title.'/>
          <label for="body">body</label>
          <textarea name="body">'.$body.'</textarea>
        </div>
        <br/>
        <br/>
        <input type="submit" formaction="list.php" value="戻る"/>
        <input type="submit" formaction="confirm.php" value="確認"/>
      </form>';

} else {

  echo '
        <h1>新規記事投稿画面</h1>
        <form method="POST">
          <div class="flex">
            <input type="hidden" name="id" value="0"/>
            <label for="title">title</label>
            <input type="text" name="title" value=""/>
            <label for="body">body</label>
            <textarea name="body"></textarea>
          </div>

          <br/>
          <br/>
          <input type="submit" formaction="list.php" value="戻る"/>
          <input type="submit" formaction="confirm.php" value="確認"/>
        </form>';
}


?>

