<?php
if($_POST){ //same if(!empty($_POST))
  echo $sql="UPDATE ch7_animal SET name='".$_POST['name']."', weight='".$_POST['weight']."', info='".$_POST['info']."', date=NOW() WHERE id=".$_POST['id'];
  $db->query($sql); //pdo->執行指令
  header('location:?page=all_animal');
}
?>
<div style="max-width:500px;margin:2% auto;text-align:center;background-color:#eee;padding:2%">
  <h1>修改動物資料ver1</h1>
  <form method="post">
    <h3>指定編號<br><input type="number" name="id" style="width:50%" required></h3>
    <h3>動物名稱<br><input type="text" name="name" style="width:50%" required></h3>
    <h3>重量<br><input type="number" name="weight" style="width:50%" required></h3>
    <h3>介紹<br><textarea name="info" rows="10" style="width:50%" required="required"></textarea></h3>
    <input type="submit" value="修改">
    <input type="reset" value="重置">
  </form>
</div>