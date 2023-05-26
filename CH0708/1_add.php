<?php
if($_POST){ //same if(!empty($_POST))
  $sql="INSERT INTO ch7_animal VALUES(null,'".$_POST['name']."','".$_POST['weight']."','".$_POST['info']."',NOW())";
  $db->query($sql); //pdo->執行指令
  header('location:?page=all_animal');
}

?>
<div style="max-width:500px;margin:2% auto;text-align:center;background-color:#eee;padding:2%">
  <h1>新增動物資料ver1</h1>
  <form method="post">
    <h3>動物名稱<br><input type="text" name="name" style="width:50%"></h3>
    <h3>重量<br><input type="text" name="weight" style="width:50%"></h3>
    <h3>介紹<br><textarea name="info" rows="10" style="width:50%"></textarea></h3>
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </form>
</div>