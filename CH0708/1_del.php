<?php
if($_POST){ //same if(!empty($_POST))
  $sql="DELETE FROM ch7_animal WHERE id=".$_POST['id'];
  $db->query($sql); //pdo->執行指令
  header('location:?page=all_animal');
}
?>
<div style="max-width:500px;margin:2% auto;text-align:center;background-color:#eee;padding:2%">
  <h1>刪除動物資料ver1</h1>
  <form method="post">
    <h3>指定編號<br><input type="number" name="id" style="width:50%" required></h3>
    <input type="submit" value="刪除">
    <input type="reset" value="重置">
  </form>
</div>