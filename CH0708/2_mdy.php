<?php
if($_POST){ //same if(!empty($_POST))
  echo $sql="UPDATE ch7_animal SET name='".$_POST['name']."', weight='".$_POST['weight']."', info='".$_POST['info']."', date=NOW() WHERE id=".$_POST['id'];
  $db->query($sql); //pdo->執行指令
  header('location:?page=crud_animal');
}

$sql = "SELECT * FROM ch7_animal WHERE id=" . $_GET['id'];
$row = $db->query($sql)->fetch(); //帶出舊值塞到HTML內去
?>
<div style="max-width:500px;margin:2% auto;text-align:center;background-color:#eee;padding:2%">
  <h1>修改動物資料ver2</h1>
  <form method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <h3>動物名稱<br><input type="text" name="name" style="width:50%" required value="<?= $row['name'] ?>"></h3>
    <h3>重量<br><input type="number" name="weight" style="width:50%" required value="<?= $row['weight'] ?>"></h3>
    <h3>介紹<br><textarea name="info" rows="10" style="width:50%" required="required"><?= $row['info'] ?></textarea></h3>
    <input type="submit" value="修改">
    <input type="reset" value="重置">
  </form>
</div>