<style>
  table {
    border-collapse: collapse;
  }
  table, tr, th, td {
    border: 1px solid #000;
  }
  th {
    background-color:cornflowerblue;
  }
</style>

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');
if(mysqli_connect_error()) {
  die('データの接続に失敗しました!');
}

$sql = "SELECT * FROM `article`";

if(!$result = mysqli_query($link, $sql)) {
  die('クエリの発行に失敗しました!');
}

define('id', 'id');
define('title', 'title');
define('body', 'body');
define('record_date', 'record_date');

?>

<h1>記事一覧</h1>
<table>
  <tr>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    <th>record_date</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

<?php
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>$row[id]</td>";
  echo "<td>$row[title]</td>";
  echo "<td>$row[body]</td>";
  echo "<td>$row[record_date]</td>";
  echo "<form action='register.php' method='get'>";
  echo "<input type='hidden' name='id' value='".$row[id]."'/>";
  echo "<td><input type='submit' name='edit' value='編集'></td>";
  echo "</form>";

  echo "<form action='delete_complete.php' method='get'>";
  echo "<input type='hidden' name='id' value='".$row[id]."'/>";
  echo "<td><input type='submit' value='削除'></td>";
  echo "</form>";
  echo "</tr>";
}
?>

</table>
<?php
echo "<form action='register.php'>";
echo "<input type='submit' value='記事の追加'/>";
echo "</form>";
?>
<script type="javascript" src="index.js"></script>

