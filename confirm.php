<style>
  label {
    font-weight: bold;
  }

  input[type="text"] {
    width: 400px;
    border: 1px solid #eee;
  }
  textarea {
    width: 400px;
    height: 300px;
    border: 1px solid #eee;
  }
  .flex {
    display: flex;
    flex-direction: column;
  }
</style>

<h1>確認画面</h1>
<?php

var_dump($_POST);
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];

if ($id === '0') {
  $uri = 'register_complete.php';
  echo $uri;
} else {
  $uri = 'update_complete.php';
}

echo '<form action="list.php" method="POST">
        <div class="flex">
          <input type="hidden" name="id" value="'.$id.'"/>
          <label for="title">title</label>
          <input type="text" name="title" value='.$title.' readonly />
          <label for="body">body</label>
          <textarea name="body" readonly>'.$body.'</textarea>
        </div>

        <br/>
        <br/>
        <button onclick="history.back()">戻る</button>
        <input type="submit" formaction='.$uri.' value="登録"/>
      </form>';
?>

<!-- <input type="submit" formaction="register.php" value="戻る"/> -->
