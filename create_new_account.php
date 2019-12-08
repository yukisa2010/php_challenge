<div>
  <h1>新規ユーザー登録</h1>
  <form action="account_complete.php" method="post">
    <input type="text" name="email" value=""/>
    <input type="password" name="password" value=""/>
    <input type="submit" value="登録"/>
  </form>
</div>

<?php
var_dump($_POST)
?>