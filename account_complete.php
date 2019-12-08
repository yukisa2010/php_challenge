<?php
  $email = $_POST['email'];
  $salt = md5($email);
  $password = md5($salt.$_POST['email']);


  $link = mysqli_connect('localhost', 'root', 'root', 'mysql');

  if(mysqli_connect_error()) {
    die('接続に失敗しました。');
  }

  $sql = "INSERT INTO `account` (`email`, `password`) VALUES('$email', '$password');";

  if(!$result = mysqli_query($link, $sql)) {
    die('クエリの発行に失敗しました。');
  } else {

    echo '<h1>ユーザー登録完了</h1>';
  }

?>

<script type="text/javascript">
    function autolink() {
      location.href="/wordpress_copy/login.php";
    }
    setTimeout(autolink, 5000);
  
</script>
